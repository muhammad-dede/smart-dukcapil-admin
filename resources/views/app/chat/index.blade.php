@extends('layouts.app.template')
@section('content')
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <div class="page-title d-flex flex-column me-3">
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">Chat</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="{{ url('/') }}" class="text-white text-hover-primary">Beranda</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-white opacity-75">Chat</li>
                </ul>
            </div>
        </div>
    </div>
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="content flex-row-fluid" id="kt_content">
            <div class="d-flex flex-column flex-lg-row">
                <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0">
                    <div class="card card-flush">
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <h5 class="card-title">Chat List</h5>
                        </div>
                        <div class="card-body pt-5" id="chat_list">
                            <div class="scroll-y me-n5 pe-5 h-500px h-lg-auto" data-kt-scroll="true"
                                data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                                data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_contacts_header"
                                data-kt-scroll-wrappers="#kt_content, #kt_chat_contacts_body" data-kt-scroll-offset="0px">
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-45px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">A</span>
                                        </div>
                                        <div class="ms-5">
                                            <a href="#"
                                                class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Amar</a>
                                            <div class="fw-bold text-muted">Pelapor</div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end ms-2">
                                        <span class="text-muted fs-7 mb-1">1 day</span>
                                    </div>
                                </div>
                                <div class="separator separator-dashed d-none"></div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-45px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">O</span>
                                        </div>
                                        <div class="ms-5">
                                            <a href="#"
                                                class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Oman</a>
                                            <div class="fw-bold text-muted">pelapor</div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end ms-2">
                                        <span class="text-muted fs-7 mb-1">3 hrs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
                    <div class="card" id="kt_chat_messenger">
                        <div class="card-header" id="chat_header">
                            <div class="card-title">
                                <div class="d-flex justify-content-center flex-column me-3">
                                    <a href="#"
                                        class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Amar</a>
                                    <div class="mb-0 lh-1">
                                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                        <span class="fs-7 fw-bold text-muted">Online</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" id="chat_body">
                            <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto overflow-scroll" data-kt-scroll="true"
                                data-kt-scroll-max-height="auto"
                                data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
                                data-kt-scroll-wrappers="#kt_content, #kt_chat_messenger_body" data-kt-scroll-offset="-2px">
                                <div class="d-flex justify-content-start mb-10">
                                    <div class="d-flex flex-column align-items-start">
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start">How
                                            likely are you to recommend our company to
                                            your friends and family ?</div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="ms-3">
                                            <span class="text-muted fs-7 mb-1">2 mins</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-10">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">5 mins</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end">Hey
                                            there, we’re just writing to let you know
                                            that you’ve been subscribed to a repository on GitHub.</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-10">
                                    <div class="d-flex flex-column align-items-start">
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start">How
                                            likely are you to recommend our company to
                                            your friends and family ?</div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="ms-3">
                                            <span class="text-muted fs-7 mb-1">2 mins</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-10">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">5 mins</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end">Hey
                                            there, we’re just writing to let you know
                                            that you’ve been subscribed to a repository on GitHub.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                                placeholder="Kirim Pesan"></textarea>
                            <div class="d-flex flex-stack">
                                <div class="d-flex align-items-center me-2">
                                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                        data-bs-toggle="tooltip" title="Upload">
                                        <i class="bi bi-paperclip fs-3"></i>
                                    </button>
                                </div>
                                <button class="btn btn-primary" type="button" id="btn_send_chat">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    {{-- <script src="{{ asset('') }}js/app/chat/index.js"></script> --}}
@endpush
