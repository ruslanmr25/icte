<?php

use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['uz', 'ru', 'en'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');


Route::get('/', function () {
    return redirect("/conferences/2026");
});


Route::get("conferences/2026", function () {
    return view("index2026");
});

Route::get("black", function () {
    return view("IndexUz");
});


Route::get("conferences/2025", function () {
    return view("index2025");
});

// Route::resource("conferences", ConferenceController::class);


// Route::get("/black", function () {
//     return view("IndexUz");
// });
