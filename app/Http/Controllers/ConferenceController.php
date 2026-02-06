<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Http\Requests\StoreConferenceRequest;
use App\Http\Requests\UpdateConferenceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admins.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admins.create");
    }


    public function store(Request $request)
    {
        // 1. Validatsiya
        $validated = $request->validate([
            'start_date' => 'required|date',
            'conferences' => 'required|array',
            'conferences.*.name' => 'required|string|max:255',
            'conferences.*.language' => 'required|string|in:uz,ru,en',
            'conferences.*.information_letter_path' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
            'conferences.*.program_path' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
            'conferences.*.archive_path' => 'nullable|file|mimes:pdf,doc,docx|max:20480',
        ]);

        try {
            DB::beginTransaction();

            foreach ($request->conferences as $lang => $data) {
                // Fayllarni yuklash
                $filePaths = [];
                foreach (['information_letter_path', 'program_path', 'archive_path'] as $fileKey) {
                    if ($request->hasFile("conferences.$lang.$fileKey")) {
                        $filePaths[$fileKey] = $request->file("conferences.$lang.$fileKey")->store('conferences/files', 'public');
                    }
                }

                // 2. Konferensiyani yaratish
                $conference = Conference::create([
                    'language'   => $data['language'],
                    'name'       => $data['name'],
                    'subname'    => $data['subname'] ?? null,
                    'about'      => $data['about'] ?? null,
                    'start_date' => $request->start_date,
                    'information_letter_path' => $filePaths['information_letter_path'] ?? null,
                    'program_path'            => $filePaths['program_path'] ?? null,
                    'archive_path'            => $filePaths['archive_path'] ?? null,
                ]);

                // 3. Maqsadlarni saqlash (Goal)
                if (!empty($data['goal_body'])) {
                    $conference->goals()->create([
                        'body' => $data['goal_body']
                    ]);
                }

                // 4. Sho'balarni saqlash (Sections)
                if (!empty($data['sections'])) {
                    foreach ($data['sections'] as $section) {
                        if (!empty($section['body'])) {
                            $conference->sections()->create($section);
                        }
                    }
                }

                // 5. Joylashuvlarni saqlash (Locations)
                if (!empty($data['locations'])) {
                    foreach ($data['locations'] as $location) {
                        if (!empty($location['place_name'])) {
                            $conference->locations()->create($location);
                        }
                    }
                }
            }

            DB::commit();
            return redirect()->route('conferences.index')->with('success', 'Konferensiya muvaffaqiyatli yaratildi!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Xatolik yuz berdi: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Conference $conference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conference $conference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConferenceRequest $request, Conference $conference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conference $conference)
    {
        //
    }
}
