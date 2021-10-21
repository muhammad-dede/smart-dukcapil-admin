<div class="card card-flush mb-6 mb-xl-9">
    <div class="card-body p-9">
        {{-- Username --}}
        <div class="d-flex flex-wrap align-items-center">
            <div id="profil-username" class="">
                <div class="fs-6 fw-bolder mb-1">Username</div>
                <div class="fw-bold text-gray-600">{{ auth()->user()->username }}</div>
            </div>
            <div id="profil-username-edit" class="flex-row-fluid d-none">
                <form action="{{ url('profil/update/username') }}" id="form-update-username" class="form"
                    method="POST">
                    @csrf
                    <div class="row mb-6">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="fv-row mb-0">
                                <label for="username" class="form-label fs-6 fw-bolder mb-3">Masukkan Username
                                    Baru</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" id="username"
                                    placeholder="Contoh: dukcapil_cilegon" name="username"
                                    value="{{ auth()->user()->username }}" />
                                <small class="username_error text-danger" id="error-text"></small>
                                @error('username')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="fv-row mb-0">
                                <label for="password_confirmation_username"
                                    class="form-label fs-6 fw-bolder mb-3">Konfirmasi
                                    Password</label>
                                <input type="password" class="form-control form-control-lg form-control-solid"
                                    name="password_confirmation_username" id="password_confirmation_username" />
                                <small class="password_confirmation_username_error text-danger" id="error-text"></small>
                                @error('password_confirmation_username')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button id="btn-update-username" type="button"
                            class="btn_update btn btn-primary me-2 px-6">Update
                            Username</button>
                        <button id="btn-cancel-edit-username" type="button"
                            class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                    </div>
                </form>
            </div>
            <div id="profil-username-button" class="ms-auto">
                <button id="btn-edit-username" type="button" class="btn btn-light btn-active-light-primary">Edit
                    Username</button>
            </div>
        </div>
        <div class="separator separator-dashed my-6"></div>
        {{-- Email --}}
        <div class="d-flex flex-wrap align-items-center">
            <div id="profil-email" class="">
                <div class="fs-6 fw-bolder mb-1">Email</div>
                <div class="fw-bold text-gray-600">{{ auth()->user()->email }}</div>
            </div>
            <div id="profil-email-edit" class="flex-row-fluid d-none">
                <form action="{{ url('profil/update/email') }}" id="form-update-email" class="form"
                    method="POST">
                    @csrf
                    <div class="row mb-6">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="fv-row mb-0">
                                <label for="email" class="form-label fs-6 fw-bolder mb-3">Masukkan Email
                                    Baru</label>
                                <input type="email" class="form-control form-control-lg form-control-solid" id="email"
                                    placeholder="Contoh: dukcapil@emali.com" name="email"
                                    value="{{ auth()->user()->email }}" />
                                <small class="email_error text-danger" id="error-text"></small>
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="fv-row mb-0">
                                <label for="password_confirmation_email"
                                    class="form-label fs-6 fw-bolder mb-3">Konfirmasi
                                    Password</label>
                                <input type="password" class="form-control form-control-lg form-control-solid"
                                    name="password_confirmation_email" id="password_confirmation_email" />
                                <small class="password_confirmation_email_error text-danger" id="error-text"></small>
                                @error('password_confirmation_email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button id="btn-update-email" type="button" class="btn_update btn btn-primary me-2 px-6">Update
                            Email</button>
                        <button id="btn-cancel-edit-email" type="button"
                            class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                    </div>
                </form>
            </div>
            <div id="profil-email-button" class="ms-auto">
                <button id="btn-edit-email" type="button" class="btn btn-light btn-active-light-primary">Edit
                    Email</button>
            </div>
        </div>
        <div class="separator separator-dashed my-6"></div>
        {{-- Password --}}
        <div class="d-flex flex-wrap align-items-center mb-5">
            <div id="profil-password">
                <div class="fs-6 fw-bolder mb-1">Password</div>
                <div class="fw-bold text-gray-600">************</div>
            </div>
            <div id="profil-password-edit" class="flex-row-fluid d-none">
                <form action="{{ url('profil/update/password') }}" id="form-update-password" class="form"
                    method="POST">
                    @csrf
                    <div class="row mb-1">
                        <div class="col-lg-4">
                            <div class="fv-row mb-0">
                                <label for="current_password" class="form-label fs-6 fw-bolder mb-3">Password Saat
                                    Ini</label>
                                <input type="password" class="form-control form-control-lg form-control-solid"
                                    name="current_password" id="current_password" />
                                <small class="current_password_error text-danger" id="error-text"></small>
                                @error('current_password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fv-row mb-0">
                                <label for="password" class="form-label fs-6 fw-bolder mb-3">Password Baru</label>
                                <input type="password" class="form-control form-control-lg form-control-solid"
                                    name="password" id="password" />
                                <small class="password_error text-danger" id="error-text"></small>
                                @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fv-row mb-0">
                                <label for="password_confirmation" class="form-label fs-6 fw-bolder mb-3">Ulangi
                                    Password Baru</label>
                                <input type="password" class="form-control form-control-lg form-control-solid"
                                    name="password_confirmation" id="password_confirmation" />
                                <small class="password_confirmation_error text-danger" id="error-text"></small>
                                @error('password_confirmation')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-text mb-5">Password harus minimal 8 karakter dan mengandung simbol</div>
                    <div class="d-flex">
                        <button id="btn-update-password" type="button"
                            class="btn_update btn btn-primary me-2 px-6">Update
                            Password</button>
                        <button id="btn-cancel-edit-password" type="button"
                            class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                    </div>
                </form>
            </div>
            <div id="profil-password-button" class="ms-auto">
                <button id="btn-edit-password" class="btn btn-light btn-active-light-primary">Reset Password</button>
            </div>
        </div>
        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6 mt-10">
            <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3"
                        d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                        fill="black" />
                    <path
                        d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                        fill="black" />
                </svg>
            </span>
            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                <div class="mb-3 mb-md-0 fw-bold">
                    <h4 class="text-gray-900 fw-bolder">Amankan akun Anda</h4>
                    <div class="fs-6 text-gray-700 pe-7">Email aktif digunakan untuk login dan lupa password. Jangan
                        beri tahu siapapun anda kepada orang lain!</div>
                </div>
            </div>
        </div>
    </div>
</div>
