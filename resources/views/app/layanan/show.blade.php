@extends('layouts.app.template')
@section('content')
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <div class="page-title d-flex flex-column me-3">
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">{{ config('app.name') }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-white opacity-75">
                        Detail Pengajuan
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center py-3 py-md-1">
                <a href="{{ url('layanan') }}" class="btn btn-bg-white btn-active-color-primary">Kembali</a>
            </div>
        </div>
    </div>
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="content flex-row-fluid" id="kt_content">
            <div class="card mb-5 mb-xl-10" id="kt_details_view">
                <div class="card-header">
                    <div class="notice bg-light-primary rounded border-primary border border-dashed p-6 my-8 w-100">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <h3 class="text-gray-900 fw-bolder mt-1">Layanan {{ $layanan->layanan }}</h3>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold text-muted">Status Layanan : </td>
                                            <td> <span
                                                    class="fw-bolder fs-6 text-{{ $layanan->aktif ? 'success' : 'danger' }}"><em>{{ $layanan->aktif ? 'Aktif' : 'Tidak Aktif' }}</em></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-9">
                    <h5 class="text-muted mb-5">Data Persyaratan | <a
                            href="{{ url('persyaratan/create') }}/{{ $layanan->id }}" class="btn_show_modal"
                            title="Tambah Persyaratan">Tambah Persyaratan</a></h5>
                    <div class="table-responsive">
                        <table class="table align-middle gs-0 gy-4" id="datatable">
                            <thead>
                                <tr class="fw-bolder text-muted bg-light">
                                    <th class="min-w-50px text-center">No</th>
                                    <th class="min-w-200px">Persyaratan</th>
                                    <th class="min-w-300px">Tipe File</th>
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
    @include('app.layanan.persyaratan.modal')
@endsection

@push('scripts')
    <script>
        $("#datatable").DataTable({
            responsive: true,
            searching: false,
            paging: false,
            ordering: false,
            info: false,
            processing: true,
            serverSide: true,
            ajax: "{{ route('persyaratan.index', $layanan->id) }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'id',
                    orderable: false,
                    searchable: false,
                    sClass: 'text-center'
                },
                {
                    data: 'persyaratan',
                    name: 'persyaratan'
                },
                {
                    data: 'type_frontend',
                    name: 'type_frontend'
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
                    sClass: 'text-center'
                },
            ]
        });
    </script>
    <script src="{{ asset('') }}js/app/persyaratan/index.js"></script>
@endpush
