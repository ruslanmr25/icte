@extends('layout.mainLayout')

@section('content')
    <div class="container-fluid">

        {{-- Form boshlanishi: Fayl yuklash uchun enctype="multipart/form-data" shart --}}
        <form action="{{ route('conference.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Konferensiya yaratish</h5>

                            {{-- Umumiy sana (barcha tillar uchun bitta) --}}
                            <div class="form-group mb-0 d-flex align-items-center">
                                <label for="start_date" class="me-2 mb-0 fw-bold">Boshlanish sanasi:</label>
                                <input type="date" name="start_date" id="start_date" class="form-control" required
                                    style="width: auto;">
                            </div>
                        </div>

                        <div class="card-body">

                            {{-- Tillar uchun navigatsiya (Tabs) --}}
                            <ul class="nav nav-tabs nav-justified">
                                <li class="nav-item">
                                    <a href="#tab-uz" data-bs-toggle="tab" class="nav-link active">
                                        <i class="bx bx-flag"></i> O'zbek
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-ru" data-bs-toggle="tab" class="nav-link">
                                        <i class="bx bx-flag"></i> Русский
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-en" data-bs-toggle="tab" class="nav-link">
                                        <i class="bx bx-flag"></i> English
                                    </a>
                                </li>
                            </ul>

                            {{-- Tablarning ichki qismi --}}
                            <div class="tab-content pt-3">

                                {{-- PHP da tillar massivi --}}
                                @php
                                    $languages = ['uz', 'ru', 'en'];
                                @endphp

                                @foreach ($languages as $lang)
                                    <div class="tab-pane {{ $lang == 'uz' ? 'active' : '' }}" id="tab-{{ $lang }}">

                                        {{-- Yashirin input: til kodi (uz, ru yoki en) --}}
                                        <input type="hidden" name="conferences[{{ $lang }}][language]"
                                            value="{{ $lang }}">

                                        <div class="row">
                                            {{-- Chap tomon: Matnli ma'lumotlar --}}
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Nomi ({{ strtoupper($lang) }})</label>
                                                    <input type="text" class="form-control"
                                                        name="conferences[{{ $lang }}][name]"
                                                        placeholder="Konferensiya nomini kiriting" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Qisqacha nomi / Subname
                                                        ({{ strtoupper($lang) }})</label>
                                                    <input type="text" class="form-control"
                                                        name="conferences[{{ $lang }}][subname]"
                                                        placeholder="Masalan: ICT-2024">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Batafsil ma'lumot
                                                        ({{ strtoupper($lang) }})</label>
                                                    <textarea class="form-control" name="conferences[{{ $lang }}][about]" rows="5"
                                                        placeholder="Konferensiya haqida to'liq ma'lumot..."></textarea>
                                                </div>
                                            </div>

                                            {{-- O'ng tomon: Fayl yuklash qismi --}}
                                            <div class="col-md-6">
                                                <div class="card bg-light border">
                                                    <div class="card-body">
                                                        <h6 class="card-title mb-3">Fayllar ({{ strtoupper($lang) }})</h6>

                                                        {{-- Information Letter Path --}}
                                                        <div class="mb-3">
                                                            <label class="form-label">Axborot xati (Information
                                                                Letter)</label>
                                                            <input type="file" class="form-control"
                                                                name="conferences[{{ $lang }}][information_letter_path]">
                                                        </div>

                                                        {{-- Program Path --}}
                                                        <div class="mb-3">
                                                            <label class="form-label">Dastur (Program)</label>
                                                            <input type="file" class="form-control"
                                                                name="conferences[{{ $lang }}][program_path]">
                                                        </div>

                                                        {{-- Archive Path --}}
                                                        <div class="mb-3">
                                                            <label class="form-label">Arxiv (Archive)</label>
                                                            <input type="file" class="form-control"
                                                                name="conferences[{{ $lang }}][archive_path]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="bx bx-save"></i> Saqlash
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
