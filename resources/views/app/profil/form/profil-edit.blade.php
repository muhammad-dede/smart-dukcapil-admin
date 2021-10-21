<div class="card card-flush mb-6 mb-xl-9">
    <form action="{{ url('profil/update/biodata') }}" method="POST" id="form-profil-update"
        enctype="multipart/form-data">
        @csrf
        <div class="card-body p-9">
            <div id="profil-edit">
                <div class="row mb-5">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Foto Profil</label>
                    <div class="col-lg-8">
                        <div class="image-input image-input-outline" data-kt-image-input="true"
                            style="background-image: url({{ asset('') }}assets/media/avatars/blank.png)">
                            <div class="image-input-wrapper w-125px h-125px"
                                style="background-image: url({{ asset('') }}images/profil/{{ auth()->user()->profil }})">
                            </div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Ubah Profil">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <input id="profil" type="file" name="profil" accept=".png, .jpg, .jpeg" />
                                <input id="profil_old" type="hidden" name="profil_old"
                                    value="{{ auth()->user()->profil }}" />
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Hapus Profil">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                        </div>
                        <div class="form-text">Tipe File: png, jpg, jpeg.</div>
                        <small class="profil_error text-danger" id="error-text"></small>
                        @error('profil')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-5">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama</label>
                    <div class="col-lg-8 fv-row">
                        <input id="nama" type="text" name="nama" class="form-control form-control-lg form-control-solid"
                            placeholder="Contoh: Rizky" value="{{ auth()->user()->nama ?? old('nama') }}" />
                        <small class="nama_error text-danger" id="error-text"></small>
                        @error('nama')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <a href="{{ url()->previous() }}" class="btn btn-light btn-active-light-primary me-2">Batal</a>
            <button type="button" class="btn btn-primary btn_update" id="btn-update-profil">Simpan</button>
        </div>
    </form>
</div>
