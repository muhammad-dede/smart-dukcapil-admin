{!! Form::model($model, [
    'route' => $model->exists ? ['user.update', $model->id] : 'user.store',
    'method' => $model->exists ? 'PUT' : 'POST',
]) !!}

<div class="d-flex flex-column scroll-y me-n7 pe-7" id="modal_user">
    <div class="fv-row mb-7">
        <label class="required fw-bold fs-6 mb-1">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control form-control-solid mb-lg-0"
            placeholder="Contoh: Admin Dukcapil" value="{{ $model->exists ? $model->nama : '' }}" />
        <small id="error_text" class="form-text text-danger nama_error"></small>
    </div>
    <div class="fv-row mb-7">
        <label class="required fw-bold fs-6 mb-1">Username</label>
        <input type="text" name="username" id="username" class="form-control form-control-solid mb-lg-0"
            placeholder="Contoh: admin_dukcapil" value="{{ $model->exists ? $model->username : '' }}" />
        <small id="error_text" class="form-text text-danger username_error"></small>
    </div>
    <div class="fv-row mb-7">
        <label class="required fw-bold fs-6 mb-1">Email</label>
        <input type="email" name="email" id="email" class="form-control form-control-solid mb-lg-0"
            placeholder="Contoh: example@domain.com" value="{{ $model->exists ? $model->email : '' }}" />
        <small id="error_text" class="form-text text-danger email_error "></small>
    </div>
    <div class="mb-7">
        <label class="required fw-bold fs-6 mb-5">Role</label>
        <div class="d-flex fv-row">
            <div class="form-check form-check-custom form-check-solid">
                <input class="form-check-input me-3" name="is_admin" type="radio" value="1" id="is_admin_1"
                    {{ $model->exists ? ($model->is_admin == 1 ? 'checked' : '') : '' }} />
                <label class="form-check-label" for="is_admin_1">
                    <div class="fw-bolder text-gray-800">Administrator</div>
                    <div class="text-gray-600">Semua akses</div>
                </label>
            </div>
        </div>
        <div class='separator separator-dashed my-5'></div>
        <div class="d-flex fv-row">
            <div class="form-check form-check-custom form-check-solid">
                <input class="form-check-input me-3" name="is_admin" type="radio" value="0" id="is_admin_0"
                    {{ $model->exists ? ($model->is_admin == 0 ? 'checked' : '') : '' }} />
                <label class="form-check-label" for="is_admin_0">
                    <div class="fw-bolder text-gray-800">Operator</div>
                    <div class="text-gray-600">Akses terbatas</div>
                </label>
            </div>
        </div>
        <small id="error_text" class="form-text text-danger is_admin_error"></small>
    </div>
</div>

{!! Form::close() !!}
