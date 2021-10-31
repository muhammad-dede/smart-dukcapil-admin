{!! Form::model($persyaratan, [
    'route' => $persyaratan->exists ? ['persyaratan.update', $persyaratan->id] : ['persyaratan.store', $layanan->id],
    'method' => $persyaratan->exists ? 'PUT' : 'PUT',
]) !!}
<div class="d-flex flex-column scroll-y me-n7 pe-7">
    <div class="fv-row mb-7">
        <label class="required fw-bold fs-6 mb-1">Persyaratan</label>
        <input type="text" name="persyaratan" id="persyaratan" class="form-control form-control-solid mb-lg-0"
            placeholder="Contoh: Foto KTP" value="{{ $persyaratan->exists ? $persyaratan->persyaratan : '' }}" />
        <small id="error_text" class="form-text text-danger persyaratan_error"></small>
    </div>
    <div class="mb-7">
        <label class="required fw-bold fs-6 mb-5">Tipe File Yang Dizinkan</label>
        <div class="d-flex fv-row">
            <div class="form-check form-check-custom form-check-solid">
                <input id="gambar" class="form-check-input me-3" name="type_backend" type="radio" value="png,jpg,jpeg"
                    {{ $persyaratan->exists ? ($persyaratan->type_backend == 'png,jpg,jpeg' ? 'checked' : '') : '' }} />
                <label class="form-check-label" for="gambar">
                    <div class="fw-bolder text-gray-800">PNG,JPG,JPEG</div>
                    <div class="text-gray-600">Gambar</div>
                </label>
            </div>
        </div>
        <div class='separator separator-dashed my-5'></div>
        <div class="d-flex fv-row">
            <div class="form-check form-check-custom form-check-solid">
                <input id="dokumen" class="form-check-input me-3" name="type_backend" type="radio" value="pdf"
                    {{ $persyaratan->exists ? ($persyaratan->type_backend == 'pdf' ? 'checked' : '') : '' }} />
                <label class="form-check-label" for="dokumen">
                    <div class="fw-bolder text-gray-800">PDF</div>
                    <div class="text-gray-600">Dokumen</div>
                </label>
            </div>
        </div>
        {{-- <div class='separator separator-dashed my-5'></div>
        <div class="d-flex fv-row">
            <div class="form-check form-check-custom form-check-solid">
                <input class="form-check-input me-3" name="type_backend[]" type="checkbox" value="pdf"
                    {{ $persyaratan->exists ? (strpos($persyaratan->type_backend, 'pdf') ? 'checked' : '') : '' }} />
                <label class="form-check-label" for="is_admin_0">
                    <div class="fw-bolder text-gray-800">PDF</div>
                    <div class="text-gray-600">Dokumen</div>
                </label>
            </div>
        </div> --}}
        <small id="error_text" class="form-text text-danger type_backend_error"></small>
    </div>
</div>
{!! Form::close() !!}
