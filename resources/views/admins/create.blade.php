@extends('layout.mainLayout')

@section('content')
<div class="container-fluid">
    <form action="{{ route('conferences.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Yangi Konferensiya</h5>
                <div class="d-flex align-items-center">
                    <label class="me-2 fw-bold">Boshlanish sanasi:</label>
                    <input type="date" name="start_date" class="form-control" style="width: auto;" required>
                </div>
            </div>

            <div class="card-body">
                <ul class="nav nav-tabs nav-justified" id="langTabs">
                    @foreach(['uz' => 'O\'zbek', 'ru' => 'Русский', 'en' => 'English'] as $code => $label)
                        <li class="nav-item">
                            <a href="#tab-{{ $code }}" data-bs-toggle="tab" class="nav-link {{ $code == 'uz' ? 'active' : '' }}">
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content pt-4">
                    @foreach (['uz', 'ru', 'en'] as $lang)
                        <div class="tab-pane {{ $lang == 'uz' ? 'active' : '' }}" id="tab-{{ $lang }}">
                            <input type="hidden" name="conferences[{{ $lang }}][language]" value="{{ $lang }}">

                            <div class="row">
                                <div class="col-md-7">
                                    <div class="mb-3">
                                        <label class="form-label">Konferensiya nomi ({{ strtoupper($lang) }})</label>
                                        <input type="text" name="conferences[{{ $lang }}][name]" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Subname</label>
                                        <input type="text" name="conferences[{{ $lang }}][subname]" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Batafsil ma'lumot</label>
                                        <textarea name="conferences[{{ $lang }}][about]" class="form-control" rows="4"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="card bg-light border-0 shadow-sm">
                                        <div class="card-body">
                                            <label class="form-label">Axborot xati (PDF/DOC)</label>
                                            <input type="file" name="conferences[{{ $lang }}][information_letter_path]" class="form-control mb-2">

                                            <label class="form-label">Dastur</label>
                                            <input type="file" name="conferences[{{ $lang }}][program_path]" class="form-control mb-2">

                                            <label class="form-label">Arxiv</label>
                                            <input type="file" name="conferences[{{ $lang }}][archive_path]" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            {{-- Maqsadlar --}}
                            <div class="mb-4">
                                <label class="fw-bold">Konferensiya Maqsadlari</label>
                                <textarea name="conferences[{{ $lang }}][goal_body]" class="form-control" rows="3" placeholder="Maqsadlarni kiriting..."></textarea>
                            </div>

                            {{-- Sho'balar --}}
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <h6 class="text-info"><i class="bx bx-layer"></i> Sho'balar</h6>
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="addSection('{{ $lang }}')">+ Sho'ba</button>
                                </div>
                                <div id="sections-{{ $lang }}"></div>
                            </div>

                            {{-- Joylashuvlar --}}
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <h6 class="text-danger"><i class="bx bx-map"></i> Joylashuvlar</h6>
                                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="addLocation('{{ $lang }}')">+ Joylashuv</button>
                                </div>
                                <div id="locations-{{ $lang }}"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary px-5">Saqlash</button>
            </div>
        </div>
    </form>
</div>

<script>
    function addSection(lang) {
        const id = Date.now();
        const html = `
            <div class="card border mb-2 position-relative shadow-sm" id="sec-${id}">
                <div class="card-body p-3">
                    <button type="button" class="btn btn-sm btn-link text-danger position-absolute top-0 end-0" onclick="this.closest('.card').remove()">✖</button>
                    <div class="row g-2">
                        <div class="col-md-4">
                            <input type="date" name="conferences[${lang}][sections][${id}][date]" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="conferences[${lang}][sections][${id}][location]" class="form-control form-control-sm" placeholder="Xona/Bino">
                        </div>
                        <div class="col-12">
                            <textarea name="conferences[${lang}][sections][${id}][body]" class="form-control form-control-sm" rows="2" placeholder="Sho'ba mavzusi"></textarea>
                        </div>
                    </div>
                </div>
            </div>`;
        document.getElementById(`sections-${lang}`).insertAdjacentHTML('beforeend', html);
    }

    function addLocation(lang) {
        const id = Date.now();
        const html = `
            <div class="card border mb-2 position-relative shadow-sm" id="loc-${id}">
                <div class="card-body p-3">
                    <button type="button" class="btn btn-sm btn-link text-danger position-absolute top-0 end-0" onclick="this.closest('.card').remove()">✖</button>
                    <div class="row g-2">
                        <div class="col-md-4"><input type="text" name="conferences[${lang}][locations][${id}][place_name]" class="form-control form-control-sm" placeholder="Joy nomi"></div>
                        <div class="col-md-5"><input type="text" name="conferences[${lang}][locations][${id}][location]" class="form-control form-control-sm" placeholder="Manzil"></div>
                        <div class="col-md-3"><input type="date" name="conferences[${lang}][locations][${id}][date]" class="form-control form-control-sm"></div>
                    </div>
                </div>
            </div>`;
        document.getElementById(`locations-${lang}`).insertAdjacentHTML('beforeend', html);
    }
</script>
@endsection
