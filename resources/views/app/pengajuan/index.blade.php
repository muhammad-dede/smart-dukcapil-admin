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
                <<div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Member Statistics</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Over 500 new members</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted bg-light">
                                        <th class="ps-4 min-w-300px rounded-start">Agent</th>
                                        <th class="min-w-125px">Earnings</th>
                                        <th class="min-w-125px">Comission</th>
                                        <th class="min-w-200px">Company</th>
                                        <th class="min-w-150px">Rating</th>
                                        <th class="min-w-200px text-end rounded-end"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-5">
                                                    <span class="symbol-label bg-light">
                                                        <img src="assets/media/svg/avatars/001-boy.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                        Simmons</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS,
                                                        ReactJS</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$8,000,000</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Pending</span>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Intertico</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX
                                                Design</span>
                                        </td>
                                        <td>
                                            <div class="rating">
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                            </div>
                                            <span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Best Rated</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                                            <a href="#"
                                                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-5">
                                                    <span class="symbol-label bg-light">
                                                        <img src="assets/media/svg/avatars/047-girl-25.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Lebron
                                                        Wayde</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">PHP, Laravel,
                                                        VueJS</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$8,750,000</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$7,400</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Agoda</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Houses &amp;
                                                Hotels</span>
                                        </td>
                                        <td>
                                            <div class="rating">
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                            </div>
                                            <span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Above
                                                Avarage</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                                            <a href="#"
                                                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-5">
                                                    <span class="symbol-label bg-light">
                                                        <img src="assets/media/svg/avatars/006-girl-3.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                        Simmons</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS,
                                                        ReactJS</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$8,000,000</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">In Proccess</span>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$2,500</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Rejected</span>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">RoadGee</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
                                        </td>
                                        <td>
                                            <div class="rating">
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                            </div>
                                            <span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Best Rated</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                                            <a href="#"
                                                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-5">
                                                    <span class="symbol-label bg-light">
                                                        <img src="assets/media/svg/avatars/014-girl-7.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali
                                                        Trump</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS,
                                                        ReactJS</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$700,000</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Pending</span>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$7,760</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">The
                                                Hill</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
                                        </td>
                                        <td>
                                            <div class="rating">
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                            </div>
                                            <span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Avarage</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                                            <a href="#"
                                                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-5">
                                                    <span class="symbol-label bg-light">
                                                        <img src="assets/media/svg/avatars/020-girl-11.svg"
                                                            class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie
                                                        Clarcson</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS,
                                                        ReactJS</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$1,320,000</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Pending</span>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$6,250</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
                                        </td>
                                        <td>
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Intertico</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX
                                                Design</span>
                                        </td>
                                        <td>
                                            <div class="rating">
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                            </div>
                                            <span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Best Rated</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                                            <a href="#"
                                                class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
            </div>
            <!--end::Tables Widget 12-->
        </div>
    </div>
    </div>

@endsection
