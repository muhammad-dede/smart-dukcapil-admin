@extends('layouts.auth.template')

@section('title', 'Reset Password')

@section('content')
<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
    <form class="form w-100" id="form-login" action="{{ url('password/reset') }}" method="POST">
        @csrf
        <div class="text-center mb-10">
            <h1 class="text-dark mb-3">Perbaharui Password Anda</h1>
            <div class="text-gray-400 fw-bold fs-6">Sudah mengatur ulang kata sandi Anda ?
                <a href="{{ url('login') }}" class="link-primary fw-bolder">Login
                    Disini</a></div>
        </div>
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="fv-row mb-10">
            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
            <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                type="text" name="email" autocomplete="off" value="{{ $email ?? old('email') }}" />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-10 fv-row" data-kt-password-meter="true">
            <div class="mb-1">
                <label class="form-label fw-bolder text-dark fs-6">Password Baru</label>
                <div class="position-relative mb-3">
                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                        name="password" autocomplete="off" />
                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                        data-kt-password-meter-control="visibility">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                </div>
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
            </div>
            <div class="text-muted"><small>Gunakan 8 karakter atau lebih dengan campuran huruf, angka &amp;
                    simbol.</small></div>
            @error('password')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="fv-row mb-10">
            <label class="form-label fw-bolder text-dark fs-6">Ulangi Password</label>
            <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                name="password_confirmation" autocomplete="off" />
        </div>
        <div class="text-center">
            <button type="submit" id="btn-reset-password" class="btn btn-lg btn-primary fw-bolder">
                <span class="indicator-label">Perbaharui Password</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </form>
</div>

@endsection
