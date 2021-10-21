@extends('layouts.app.template')
@section('content')
<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <div class="page-title d-flex flex-column me-3">
            <h1 class="d-flex text-white fw-bolder my-1 fs-3">Beranda</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <li class="breadcrumb-item text-white opacity-75">
                    <a href="#" class="text-white text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-white opacity-75">Beranda</li>
            </ul>
        </div>
        <div class="d-flex align-items-center py-3 py-md-1">
            <a href="#"
                class="btn btn-custom btn-active-white btn-flex btn-color-white btn-active-color-primary fw-bolder"
                data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Layanan
                Baru</a>
            {{-- <a href="#" class="btn btn-bg-white btn-active-color-primary" data-bs-toggle="modal"
                data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a> --}}
        </div>
    </div>
</div>
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="content flex-row-fluid" id="kt_content">
        <div class="row gy-5 g-xl-8">
            <div class="col-xxl-4">
                <div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
                    <div class="card-body d-flex flex-column p-0">
                        <div class="flex-grow-1 card-p pb-0">
                            <div class="d-flex flex-stack flex-wrap">
                                <div class="me-2">
                                    <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Generate
                                        Reports</a>
                                    <div class="text-muted fs-7 fw-bold">Finance and accounting reports
                                    </div>
                                </div>
                                <div class="fw-bolder fs-3 text-primary">$24,500</div>
                            </div>
                        </div>
                        <div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="primary"
                            style="height: 150px"></div>
                    </div>
                </div>
                <div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
                    <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
                        <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
                            <div class="me-2">
                                <span class="fw-bolder text-gray-800 d-block fs-3">Sales</span>
                                <span class="text-gray-400 fw-bold">Oct 8 - Oct 26 21</span>
                            </div>
                            <div class="fw-bolder fs-3 text-primary">$15,300</div>
                        </div>
                        <div class="mixed-widget-10-chart" data-kt-color="primary" style="height: 175px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
