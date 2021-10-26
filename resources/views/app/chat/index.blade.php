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
            <div class="d-flex flex-column flex-lg-row">
                <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0">
                    <div class="card card-flush">
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <form class="w-100 position-relative" autocomplete="off">
                                <span
                                    class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                            transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <input type="text" class="form-control form-control-solid px-15" name="search" value=""
                                    placeholder="Cari nama atau username..." />
                            </form>
                        </div>
                        <div class="card-body pt-5" id="kt_chat_contacts_body">
                            <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-scroll="true"
                                data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                                data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_contacts_header"
                                data-kt-scroll-wrappers="#kt_content, #kt_chat_contacts_body" data-kt-scroll-offset="0px">
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-45px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">M</span>
                                        </div>
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
                                                Macy</a>
                                            <div class="fw-bold text-muted">melody@altbox.com</div>
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
                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                        </div>
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
                                                Smith</a>
                                            <div class="fw-bold text-muted">max@kt.com</div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end ms-2">
                                        <span class="text-muted fs-7 mb-1">3 hrs</span>
                                    </div>
                                </div>
                                <div class="separator separator-dashed d-none"></div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-45px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                        </div>
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
                                                Bean</a>
                                            <div class="fw-bold text-muted">sean@dellito.com</div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end ms-2">
                                        <span class="text-muted fs-7 mb-1">2 weeks</span>
                                    </div>
                                </div>
                                <div class="separator separator-dashed d-none"></div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-45px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                        </div>
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
                                                Cox</a>
                                            <div class="fw-bold text-muted">brian@exchange.com</div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end ms-2">
                                        <span class="text-muted fs-7 mb-1">1 week</span>
                                        <span class="badge badge-sm badge-circle badge-light-warning">9</span>
                                    </div>
                                </div>
                                <div class="separator separator-dashed d-none"></div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-45px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fs-6 fw-bolder">M</span>
                                            <div
                                                class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2">
                                            </div>
                                        </div>
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
                                                Collins</a>
                                            <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end ms-2">
                                        <span class="text-muted fs-7 mb-1">20 hrs</span>
                                    </div>
                                </div>
                                <div class="separator separator-dashed d-none"></div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-45px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-8.jpg" />
                                        </div>
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
                                                Mitcham</a>
                                            <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
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
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
                                                Wild</a>
                                            <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end ms-2">
                                        <span class="text-muted fs-7 mb-1">5 hrs</span>
                                    </div>
                                </div>
                                <div class="separator separator-dashed d-none"></div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-45px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fs-6 fw-bolder">N</span>
                                            <div
                                                class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2">
                                            </div>
                                        </div>
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
                                                Owen</a>
                                            <div class="fw-bold text-muted">owen.neil@gmail.com</div>
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
                                            <img alt="Pic" src="assets/media/avatars/150-6.jpg" />
                                        </div>
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
                                                Wilson</a>
                                            <div class="fw-bold text-muted">dam@consilting.com</div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end ms-2">
                                        <span class="text-muted fs-7 mb-1">5 hrs</span>
                                    </div>
                                </div>
                                <div class="separator separator-dashed d-none"></div>
                                <div class="d-flex flex-stack py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-45px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">E</span>
                                        </div>
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                Bold</a>
                                            <div class="fw-bold text-muted">emma@intenso.com</div>
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
                        <div class="card-header" id="kt_chat_messenger_header">
                            <div class="card-title">
                                <div class="d-flex justify-content-center flex-column me-3">
                                    <a href="#"
                                        class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian
                                        Cox</a>
                                    <div class="mb-0 lh-1">
                                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                        <span class="fs-7 fw-bold text-muted">Active</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-toolbar">
                                <div class="me-n3">
                                    <button class="btn btn-sm btn-icon btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="bi bi-three-dots fs-2"></i>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_users_search">Add Contact</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify a contact email to send an invitation"></i></a>
                                        </div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Groups</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                        title="Coming soon">Create Group</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                        title="Coming soon">Invite Members</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                        title="Coming soon">Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                title="Coming soon">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" id="kt_chat_messenger_body">
                            <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages"
                                data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                data-kt-scroll-max-height="auto"
                                data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
                                data-kt-scroll-wrappers="#kt_content, #kt_chat_messenger_body" data-kt-scroll-offset="-2px">
                                <div class="d-flex justify-content-start mb-10">
                                    <div class="d-flex flex-column align-items-start">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                            </div>
                                            <div class="ms-3">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                                    Cox</a>
                                                <span class="text-muted fs-7 mb-1">2 mins</span>
                                            </div>
                                        </div>
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                            data-kt-element="message-text">How likely are you to recommend our company to
                                            your friends and family ?</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-10">
                                    <div class="d-flex flex-column align-items-end">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="me-3">
                                                <span class="text-muted fs-7 mb-1">5 mins</span>
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                            </div>
                                        </div>
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                            data-kt-element="message-text">Hey there, we’re just writing to let you know
                                            that you’ve been subscribed to a repository on GitHub.</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-10">
                                    <div class="d-flex flex-column align-items-start">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                            </div>
                                            <div class="ms-3">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                                    Cox</a>
                                                <span class="text-muted fs-7 mb-1">1 Hour</span>
                                            </div>
                                        </div>
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                            data-kt-element="message-text">Ok, Understood!</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-10">
                                    <div class="d-flex flex-column align-items-end">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="me-3">
                                                <span class="text-muted fs-7 mb-1">2 Hours</span>
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                            </div>
                                        </div>
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                            data-kt-element="message-text">You’ll receive notifications for all issues, pull
                                            requests!</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-10">
                                    <div class="d-flex flex-column align-items-start">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                            </div>
                                            <div class="ms-3">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                                    Cox</a>
                                                <span class="text-muted fs-7 mb-1">3 Hours</span>
                                            </div>
                                        </div>
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                            data-kt-element="message-text">You can unwatch this repository immediately by
                                            clicking here:
                                            <a href="https://keenthemes.com">Keenthemes.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-10">
                                    <div class="d-flex flex-column align-items-end">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="me-3">
                                                <span class="text-muted fs-7 mb-1">4 Hours</span>
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                            </div>
                                        </div>
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                            data-kt-element="message-text">Most purchased Business courses during this sale!
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-10">
                                    <div class="d-flex flex-column align-items-start">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                            </div>
                                            <div class="ms-3">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                                    Cox</a>
                                                <span class="text-muted fs-7 mb-1">5 Hours</span>
                                            </div>
                                        </div>
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                            data-kt-element="message-text">Company BBQ to celebrate the last quater
                                            achievements and goals. Food and drinks provided</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                                    <div class="d-flex flex-column align-items-end">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="me-3">
                                                <span class="text-muted fs-7 mb-1">Just now</span>
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                            </div>
                                        </div>
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                            data-kt-element="message-text"></div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                                    <div class="d-flex flex-column align-items-start">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                            </div>
                                            <div class="ms-3">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                                    Cox</a>
                                                <span class="text-muted fs-7 mb-1">Just now</span>
                                            </div>
                                        </div>
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                            data-kt-element="message-text">Right before vacation season we have the next Big
                                            Deal for you.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                                placeholder="Type a message"></textarea>
                            <div class="d-flex flex-stack">
                                <div class="d-flex align-items-center me-2">
                                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                        data-bs-toggle="tooltip" title="Coming soon">
                                        <i class="bi bi-paperclip fs-3"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                        data-bs-toggle="tooltip" title="Coming soon">
                                        <i class="bi bi-upload fs-3"></i>
                                    </button>
                                </div>
                                <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('') }}js/app/chat/index.js"></script>
@endpush
