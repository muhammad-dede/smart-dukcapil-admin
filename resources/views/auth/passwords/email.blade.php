@extends('layouts.auth.template')

@section('title', 'Lupa Password')

@section('content')
<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
    <form class="form w-100" id="form-forget-password" action="{{ url('password/email') }}" method="POST">
        @csrf
        <div class="text-center mb-10">
            <h1 class="text-dark mb-3">Forgot Password ?</h1>
            <div class="text-gray-400 fw-bold fs-6">Masukan Email Untuk Mereset Password Anda.</div>
        </div>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <div class="fv-row mb-10">
            <label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
            <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                type="text" name="email" autocomplete="off" value="{{ old('email') }}" />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="submit" id="btn-forget-password" class="btn btn-lg btn-primary fw-bolder me-4">
                <span class="indicator-label">Kirim Link Reset Password</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <a href="{{ url('login') }}" class="btn btn-lg btn-light-primary fw-bolder">Batal</a>
        </div>
    </form>
</div>

@endsection
