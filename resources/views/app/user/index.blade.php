@extends('layouts.app.template')
@section('content')
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <div class="page-title d-flex flex-column me-3">
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">Data User</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="{{ url('/') }}" class="text-white text-hover-primary">Beranda</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-white opacity-75">User</li>
                </ul>
            </div>
            <div class="d-flex align-items-center py-3 py-md-1">
                <a href="{{ url('user/create') }}" class="btn btn-bg-white btn-active-color-primary modal_user_show"
                    title="Tambah User">Tambah User</a>
            </div>
        </div>
    </div>
    <div id=" kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="content flex-row-fluid" id="kt_content">
            <div class="card">
                <div class="card-body pt-10">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="datatable">
                            <thead>
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-20px">No</th>
                                    <th class="min-w-125px">Nama</th>
                                    <th class="min-w-125px">Email</th>
                                    <th class="min-w-125px">Username</th>
                                    <th class="min-w-125px">Role</th>
                                    <th class="text-center min-w-100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                                {{--  --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal --}}
    @include('app.user._modal')
@endsection

@push('scripts')
    <script>
        $("#datatable").DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('user.data') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'id'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'is_admin',
                    name: 'is_admin'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });
    </script>
    <script src="{{ asset('') }}js/app/user/index.js"></script>
@endpush
