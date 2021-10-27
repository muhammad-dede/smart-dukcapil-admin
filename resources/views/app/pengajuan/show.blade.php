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
                <a href="{{ url('pengajuan') }}" class="btn btn-bg-white btn-active-color-primary">Kembali</a>
            </div>
        </div>
    </div>
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="content flex-row-fluid" id="kt_content">
            <div class="card mb-5 mb-xl-10" id="kt_details_view">
                <div class="card-header">
                    <div
                        class="notice bg-light-{{ $status_pengajuan->color }} rounded border-{{ $status_pengajuan->color }} border border-dashed p-6 my-8 w-100">
                        <div class="row">
                            <div class="col-md-7 mb-3">
                                <h3 class="text-gray-900 fw-bolder mt-1">{{ $pengajuan->layanan->layanan }}</h3>
                                <div class="row mb-1">
                                    <label class="col-lg-4 fw-bold text-muted">Tanggal Pengajuan</label>
                                    <div class="col-lg-8">
                                        <span
                                            class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->tgl)->isoFormat('dddd, D MMMM Y') }}</span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label class="col-lg-4 fw-bold text-muted">Status Pengajuan</label>
                                    <div class="col-lg-8">
                                        <span
                                            class="fw-bolder fs-6 text-{{ $status_pengajuan->color }}"><em>{{ $status_pengajuan->status }}</em></span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <div class="dropdown">
                                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                                id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                                Ubah Status Pengajuan
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-dark"
                                                aria-labelledby="dropdownMenuButton2">
                                                <li>
                                                    <button type="button" class="dropdown-item modal_status_show"
                                                        url="{{ url('pengajuan/status') }}/{{ $pengajuan->id }}/terima"
                                                        title="Pengajuan Diterima" color="btn btn-success">Terima</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="dropdown-item modal_status_show"
                                                        url="{{ url('pengajuan/status') }}/{{ $pengajuan->id }}/tolak"
                                                        title="Pengajuan Ditolak" color="btn btn-danger">Tolak</button>
                                                </li>
                                                @if (auth()->user()->is_admin)
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <form
                                                            action="{{ url('pengajuan/status') }}/{{ $pengajuan->id }}/reset"
                                                            method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit"
                                                                text="Yakin ingin mengatur ulang status pengajuan?"
                                                                class="dropdown-item btn_status"
                                                                title="Atur Ulang Status">Atur
                                                                Ulang
                                                                Status</button>
                                                        </form>
                                                        {{-- <button type="button" class="dropdown-item modal_status_show"
                                                            url="{{ url('pengajuan/status') }}/{{ $pengajuan->id }}/reset"
                                                            title="Atur Ulang Status Pengajuan" color="btn btn-warning">Atur
                                                            Ulang Status</button> --}}
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h3 class="text-gray-900 fw-bolder">Data Pelapor</h3>
                                <div class="row mb-1">
                                    <label class="col-lg-4 fw-bold text-muted">Nama</label>
                                    <div class="col-lg-8">
                                        <span
                                            class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->pelapor->nama_lengkap) }}</span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label class="col-lg-4 fw-bold text-muted">NIK</label>
                                    <div class="col-lg-8">
                                        <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->pelapor->nik }}</span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label class="col-lg-4 fw-bold text-muted">No Kartu Keluarga</label>
                                    <div class="col-lg-8">
                                        <span
                                            class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->pelapor->no_kk }}</span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan</label>
                                    <div class="col-lg-8">
                                        <span
                                            class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->pelapor->kewarganegaraan) ? $pengajuan->pelapor->kewargaNegaraan->nama : '' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-9">
                    @if ($pengajuan->layanan->url == 'kelahiran' && $pengajuan->id_layanan == 1)
                        @include('app.pengajuan.show.kelahiran')
                    @elseif ($pengajuan->layanan->url == 'lahir-mati' && $pengajuan->id_layanan == 2)
                        @include('app.pengajuan.show.lahir-mati')
                    @elseif ($pengajuan->layanan->url == 'perkawinan' && $pengajuan->id_layanan == 3)
                        @include('app.pengajuan.show.perkawinan')
                    @elseif ($pengajuan->layanan->url == 'pembatalan-perkawinan' && $pengajuan->id_layanan == 4)
                        @include('app.pengajuan.show.pembatalan-perkawinan')
                    @elseif ($pengajuan->layanan->url == 'perceraian' && $pengajuan->id_layanan == 5)
                        @include('app.pengajuan.show.perceraian')
                    @elseif ($pengajuan->layanan->url == 'pembatalan-perceraian' && $pengajuan->id_layanan == 6)
                        @include('app.pengajuan.show.pembatalan-perceraian')
                    @elseif ($pengajuan->layanan->url == 'kematian' && $pengajuan->id_layanan == 7)
                        @include('app.pengajuan.show.kematian')
                    @elseif ($pengajuan->layanan->url == 'pengangkatan-anak' && $pengajuan->id_layanan == 8)
                        @include('app.pengajuan.show.pengangkatan-anak')
                    @elseif ($pengajuan->layanan->url == 'pengakuan-anak' && $pengajuan->id_layanan == 9)
                        @include('app.pengajuan.show.pengakuan-anak')
                    @elseif ($pengajuan->layanan->url == 'pengesahan-anak' && $pengajuan->id_layanan == 10)
                        @include('app.pengajuan.show.pengesahan-anak')
                    @elseif ($pengajuan->layanan->url == 'perubahan-nama' && $pengajuan->id_layanan == 11)
                        @include('app.pengajuan.show.perubahan-nama')
                    @elseif ($pengajuan->layanan->url == 'perubahan-status-kewarganegaraan' && $pengajuan->id_layanan ==
                        12)
                        @include('app.pengajuan.show.perubahan-status-kewarganegaraan')
                    @elseif ($pengajuan->layanan->url == 'pencatatan-peristiwa-penting-lainnya' &&
                        $pengajuan->id_layanan == 13)
                        @include('app.pengajuan.show.pencatatan-peristiwa-penting-lainnya')
                    @elseif ($pengajuan->layanan->url == 'pembetulan-akta' && $pengajuan->id_layanan == 14)
                        @include('app.pengajuan.show.pembetulan-akta')
                    @elseif ($pengajuan->layanan->url == 'pembatalan-akta' && $pengajuan->id_layanan == 15)
                        @include('app.pengajuan.show.pembatalan-akta')
                    @elseif ($pengajuan->layanan->url == 'pelaporan-pencatatan-sipil-dari-luar-wilayah-nkri' &&
                        $pengajuan->id_layanan == 16)
                        @include('app.pengajuan.show.pelaporan-pencatatan-sipil-dari-luar-wilayah-nkri')
                    @else
                        @include('app.pengajuan.show.404')
                    @endif
                    @if (count($pengajuan->pengajuanBerkas))
                        <div class="mb-3 text-muted">
                            <hr>
                        </div>
                        <div id="data-berkas-pengajuan">
                            <h3 class="text-primary mb-5">Berkas Pengajuan</h3>
                            @foreach ($pengajuan->pengajuanBerkas as $berkas)
                                <div class="row mb-7">
                                    <label
                                        class="col-lg-4 fw-bold text-muted">{{ $berkas->persyaratan->persyaratan }}</label>
                                    <div class="col-lg-8">
                                        <a href="{{ asset('') }}berkas/{{ $berkas->berkas }}" class="fw-bolder fs-6"
                                            target="_blank">{{ $berkas->berkas }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('app.pengajuan.modal.status')
@endsection

@push('scripts')
    <script src="{{ asset('') }}js/app/pengajuan/show.js"></script>
@endpush
