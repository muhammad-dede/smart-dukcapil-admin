@extends('layouts.app.template')
@section('content')
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <div class="page-title d-flex flex-column me-3">
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">{{ config('app.name') }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-white opacity-75">
                        Pengajuan Layanan
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center py-3 py-md-1">
                <a href="{{ url('app/layanan') }}" class="btn btn-bg-white btn-active-color-primary">Kembali</a>
            </div>
        </div>
    </div>
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="content flex-row-fluid" id="kt_content">
            @if ($layanan->url == 'kelahiran' || $layanan->id == 1)
                @include('app.layanan.form.kelahiran')
            @elseif ($layanan->url == 'lahir-mati' || $layanan->id == 2)
                @include('app.layanan.form.lahir-mati')
            @elseif ($layanan->url == 'lahir-perkawinan' || $layanan->id == 3)
                @include('app.layanan.form.perkawinan')
            @elseif ($layanan->url == 'pembatalan-perkawinan' || $layanan->id == 4)
                @include('app.layanan.form.pembatalan-perkawinan')
            @elseif ($layanan->url == 'perceraian' || $layanan->id == 5)
                @include('app.layanan.form.perceraian')
            @elseif ($layanan->url == 'pembatalan-perceraian' || $layanan->id == 6)
                @include('app.layanan.form.pembatalan-perceraian')
            @elseif ($layanan->url == 'kematian' || $layanan->id == 7)
                @include('app.layanan.form.kematian')
            @elseif ($layanan->url == 'pengangkatan-anak' || $layanan->id == 8)
                @include('app.layanan.form.pengangkatan-anak')
            @elseif ($layanan->url == 'pengakuan-anak' || $layanan->id == 9)
                @include('app.layanan.form.pengakuan-anak')
            @elseif ($layanan->url == 'pengesahan-anak' || $layanan->id == 10)
                @include('app.layanan.form.pengesahan-anak')
            @elseif ($layanan->url == 'perubahan-nama' || $layanan->id == 11)
                @include('app.layanan.form.perubahan-nama')
            @elseif ($layanan->url == 'perubahan-status-kewarganegaraan' || $layanan->id == 12)
                @include('app.layanan.form.perubahan-status-kewarganegaraan')
            @elseif ($layanan->url == 'pencatatan-peristiwa-penting-lainnya' || $layanan->id == 13)
                @include('app.layanan.form.pencatatan-peristiwa-penting-lainnya')
            @elseif ($layanan->url == 'pembetulan-akta' || $layanan->id == 14)
                @include('app.layanan.form.pembetulan-akta')
            @elseif ($layanan->url == 'pembatalan-akta' || $layanan->id == 15)
                @include('app.layanan.form.pembatalan-akta')
            @elseif ($layanan->url == 'pelaporan-luar-nkri' || $layanan->id == 16)
                @include('app.layanan.form.pelaporan-luar-nkri')
            @else
                @include('app.layanan.form.404')
            @endif
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        var base_url = {!! json_encode(url('/')) !!};
    </script>
    <script src="{{ asset('') }}js/app/layanan/create.js"></script>
@endpush
