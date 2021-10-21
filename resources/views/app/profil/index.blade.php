@extends('layouts.app.template')
@section('content')
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <div class="page-title d-flex flex-column me-3">
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">{{ config('app.name') }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-white opacity-75">
                        Profil Saya
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center py-3 py-md-1">
                <a href="{{ url()->previous() }}" class="btn btn-bg-white btn-active-color-primary">Kembali</a>
            </div>
        </div>
    </div>
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="content flex-row-fluid" id="kt_content">
            <div class="d-flex flex-column flex-xl-row">
                <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                    <div class="card mb-5 mb-xl-8">
                        <div class="card-body">
                            <div class="d-flex flex-center flex-column py-5">
                                <div class="symbol symbol-100px symbol-circle mb-7">
                                    <img src="{{ asset('') }}images/profil/{{ auth()->user()->profil }}"
                                        alt="image" />
                                </div>
                                <a href="#"
                                    class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">{{ auth()->user()->nama }}</a>
                                <div class="mb-9">
                                    <div class="badge badge-lg badge-light-primary d-inline">
                                        {{ auth()->user()->is_admin ? 'Administrator' : 'Operator' }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-stack fs-4 py-3">
                                <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse"
                                    href="#kt_user_view_details" role="button" aria-expanded="false"
                                    aria-controls="kt_user_view_details">Detail
                                    <span class="ms-2 rotate-180">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="separator"></div>
                            <div id="kt_user_view_details" class="collapse show">
                                <div class="pb-5 fs-6">
                                    <div class="fw-bolder mt-5">Nama</div>
                                    <div class="text-gray-600">{{ auth()->user()->nama }}</div>
                                    <div class="fw-bolder mt-5">Username</div>
                                    <div class="text-primary">{{ strtolower(auth()->user()->username) }}</div>
                                    <div class="fw-bolder mt-5">Email</div>
                                    <div class="text-primary">{{ auth()->user()->email }}</div>
                                    <div class="fw-bolder mt-5">Role</div>
                                    <div class="text-gray-600">
                                        {{ auth()->user()->is_admin ? 'Administrator' : 'Operator' }}</div>
                                    <div class="fw-bolder mt-5">Status</div>
                                    <div class="text-gray-600">
                                        {{ auth()->user()->aktif ? 'Aktif' : 'Tidak Aktif' }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-lg-row-fluid ms-lg-15">
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#edit_profil">Edit profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab"
                                href="#edit_akun">Edit Akun</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="edit_profil" role="tabpanel">
                            @include('app.profil.form.profil-edit')
                        </div>
                        <div class="tab-pane fade" id="edit_akun" role="tabpanel">
                            @include('app.profil.form.akun-edit')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('') }}js/app/profil/edit.js"></script>
@endpush
