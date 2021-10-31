<div id="kt_header" class="header align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header"
    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <div class="container-xxl d-flex align-items-center">
        <div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                id="kt_header_menu_mobile_toggle">
                <span class="svg-icon svg-icon-2x">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                            fill="black" />
                        <path opacity="0.3"
                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                            fill="black" />
                    </svg>
                </span>
            </div>
        </div>
        <div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
            <a href="{{ url('') }}">
                <img alt="Logo" src="{{ asset('') }}logo.png" class="logo-default h-40px" />
                <img alt="Logo" src="{{ asset('') }}logo.png" class="logo-sticky h-40px" />
            </a>
        </div>
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <div class="d-flex align-items-stretch" id="kt_header_nav">
                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
                    data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                        id="#kt_header_menu" data-kt-menu="true">
                        <div data-kt-menu-placement="bottom-start" class="menu-item me-lg-1">
                            <a class="menu-link {{ Request::is('/') ? 'active' : '' }} py-3"
                                href="{{ url('') }}">
                                <span class="menu-title">Beranda</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                            class="menu-item menu-lg-down-accordion me-lg-1">
                            <span
                                class="menu-link {{ Request::is('user') || Request::is('layanan') ? 'active' : '' }} py-3">
                                <span class="menu-title">Master Data</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                <div class="menu-item">
                                    <a href="{{ url('user') }}"
                                        class="menu-link {{ Request::is('user') ? 'active' : '' }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">User</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="{{ url('layanan') }}"
                                        class="menu-link {{ Request::is('layanan') ? 'active' : '' }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Layanan</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-placement="bottom-start" class="menu-item me-lg-1">
                            <a class="menu-link {{ Request::is('pengajuan') ? 'active' : '' }} py-3"
                                href="{{ url('pengajuan') }}">
                                <span class="menu-title">Pengajuan</span>
                                <span></span>
                            </a>
                        </div>
                        <div data-kt-menu-placement="bottom-start" class="menu-item me-lg-1">
                            <a class="menu-link {{ Request::is('chat') ? 'active' : '' }} py-3"
                                href="{{ url('chat') }}">
                                <span class="menu-title">Chat</span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-stretch flex-shrink-0">
                <div class="topbar d-flex align-items-stretch flex-shrink-0">
                    <div class="d-flex align-items-center ms-1 ms-lg-3">
                        <div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px"
                            data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                            data-kt-menu-placement="bottom-end">
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                        fill="black" />
                                    <path
                                        d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                        fill="black" />
                                    <path opacity="0.3"
                                        d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                        fill="black" />
                                    <path opacity="0.3"
                                        d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                        fill="black" />
                                </svg>
                            </span>
                            @if (get_notifikasi()->count_notifikasi > 0)
                                <span
                                    class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                            @endif
                        </div>
                        <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                            <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                style="background-image:url('{{ asset('') }}assets/media/misc/pattern-1.jpg')">
                                <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifikasi
                                    <span
                                        class="fs-8 opacity-75 ps-3">{{ get_notifikasi()->count_notifikasi }}</span>
                                </h3>
                                <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                            data-bs-toggle="tab" href="#kt_topbar_notifications_1">Pengajuan</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
                                    <div class="scroll-y mh-325px my-5 px-8">
                                        @foreach (get_notifikasi()->data_notifikasi as $notifikasi)
                                            <div class="d-flex flex-stack py-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-info">
                                                            <span class="svg-icon svg-icon-2 svg-icon-info">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.3" x="2" y="2" width="20"
                                                                        height="20" rx="10" fill="black" />
                                                                    <rect x="11" y="14" width="7" height="2" rx="1"
                                                                        transform="rotate(-90 11 14)" fill="black" />
                                                                    <rect x="11" y="17" width="2" height="2" rx="1"
                                                                        transform="rotate(-90 11 17)" fill="black" />
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="mb-0 me-2">
                                                        <a href="{{ url('pengajuan', $notifikasi->id) }}"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bolder">{{ $notifikasi->layanan->layanan }}</a>
                                                        <div class="text-gray-400 fs-7">
                                                            {{ $notifikasi->status == 'V' ? 'Sedang Diverifikasi' : 'Done' }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <span
                                                    class="badge badge-light fs-8">{{ \Carbon\Carbon::parse($notifikasi->tgl)->diffForHumans() }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="py-3 text-center border-top">
                                        <a href="{{ url('pengajuan') }}"
                                            class="btn btn-color-gray-600 btn-active-color-primary">Lihat Semua
                                            <span class="svg-icon svg-icon-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                        transform="rotate(-180 18 13)" fill="black" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center me-n3 ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                            data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                            data-kt-menu-placement="bottom-end">
                            <img class="h-30px w-30px rounded"
                                src="{{ asset('') }}images/profil/{{ auth()->user()->profil }}" alt="" />
                        </div>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                            data-kt-menu="true">
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo"
                                            src="{{ asset('') }}images/profil/{{ auth()->user()->profil }}" />
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">
                                            {{ Str::words(auth()->user()->nama, 1, '') }} </div>
                                        <a href="{{ url('profil') }}"
                                            class="fw-bold text-muted text-hover-primary fs-7">{{ \Illuminate\Support\Str::limit(auth()->user()->email . 'ahsdkjhdasdh', 20, $end = '...') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-2"></div>
                            <div class="menu-item px-5">
                                <a href="{{ url('profil') }}" class="menu-link px-5">Profil Saya</a>
                            </div>
                            <div class="menu-item px-5">
                                <a href="{{ url('logout') }}" class="menu-link px-5 text-danger"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
