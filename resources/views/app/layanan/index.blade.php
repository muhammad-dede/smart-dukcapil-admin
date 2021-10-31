@extends('layouts.app.template')
@section('content')
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <div class="page-title d-flex flex-column me-3">
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">Data Layanan</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="{{ url('/') }}" class="text-white text-hover-primary">Beranda</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-white opacity-75">Layanan</li>
                </ul>
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
                                    <th class="min-w-20px text-center">No</th>
                                    <th class="min-w-125px">Layanan</th>
                                    <th class="min-w-125px">Status</th>
                                    <th class="text-center min-w-100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                                @foreach ($data_layanan as $layanan)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $layanan->layanan }}</td>
                                        <td><span
                                                class="badge badge-{{ $layanan->aktif ? 'success' : 'danger' }}">{{ $layanan->aktif ? 'Aktif' : 'Tidak Aktif' }}</span>
                                        </td>
                                        <td class="text-center">
                                            <form id="form_status" action="{{ url('layanan', $layanan->id) }}"
                                                method="POST" class="form-inline">
                                                @csrf
                                                @method("delete")
                                                <a href="{{ url('layanan') }}/{{ $layanan->id }}"
                                                    class="btn btn-light btn-active-light-primary btn-sm"
                                                    title="Detail">Detail</a>
                                                <button id="btn_status"
                                                    class="btn btn-light btn-active-light-primary btn-sm"
                                                    title="{{ $layanan->aktif ? 'Nonaktifkan' : 'Aktifkan' }}">{{ $layanan->aktif ? 'Nonaktifkan' : 'Aktifkan' }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
        });

        $("#btn_status").on("click", function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Ubah Status',
                text: "Yakin Ingin " + $(this).attr("title"),
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    $("#form_status").submit();
                }
            })
        });
    </script>
@endpush
