@extends('layouts.app.template')
@section('content')
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <div class="page-title d-flex flex-column me-3">
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">Data Pengajuan</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="{{ url('/') }}" class="text-white text-hover-primary">Beranda</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-white opacity-75">Pengajuan</li>
                </ul>
            </div>
            <div class="d-flex align-items-center py-3 py-md-1">
                <a href="{{ url('pengajuan/create') }}" class="btn btn-bg-white btn-active-color-primary">Tambah
                    Pengajuan</a>
            </div>
        </div>
    </div>
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="content flex-row-fluid" id="kt_content">
            <div class="row gy-5 g-xl-8">
                <div class="card mb-5 mb-xl-8">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Semua Data Pengajuan</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Belum Diverifikasi
                                {{ get_notifikasi()->count_notifikasi }}</span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4" id="datatable">
                                <thead>
                                    <tr class="fw-bolder text-muted bg-light">
                                        <th class="min-w-50px text-center">No</th>
                                        <th class="min-w-200px">Pelapor</th>
                                        <th class="min-w-300px">Pengajuan</th>
                                        <th class="min-w-125px">Tanggal Pengajuan</th>
                                        <th class="min-w-200px">Status</th>
                                        <th class="min-w-200px text-end rounded-end"></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $("#datatable").DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('pengajuan.data') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'id',
                    orderable: false,
                    searchable: false,
                    sClass: 'text-center'
                },
                {
                    data: 'pelapor',
                    name: 'pelapor'
                },
                {
                    data: 'layanan',
                    name: 'layanan'
                },
                {
                    data: 'tgl',
                    name: 'tgl'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                },
            ]
        });
    </script>
    <script src="{{ asset('') }}js/app/user/index.js"></script>
@endpush
