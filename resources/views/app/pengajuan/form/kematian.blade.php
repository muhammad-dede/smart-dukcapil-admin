<div class="card mb-5 mb-xl-10">
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
        data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Pelaporan Sipil Layanan {{ $layanan->layanan }}</h3>
        </div>
    </div>
    <div id="kt_account_profile_details" class="collapse show">
        <form action="{{ url('app/layanan/store') }}/{{ $layanan->url }}" id="form-pengajuan-layanan"
            class="form" method="POST">
            @csrf
            <input type="hidden" id="url-layanan" value="{{ $layanan->url }}">
            <div class="card-body border-top p-9">
                {{-- Data Anak --}}
                <div id="data-kematian">
                    <h2 class="mb-5 text-primary">Data Kematian</h2>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nik_kematian" type="text" name="nik_kematian"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh: 360408020202****" value="{{ old('nik_kematian') }}" />
                            <small class="nik_kematian_error text-danger" id="error-text"></small>
                            @error('nik_kematian')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Lengkap</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_kematian" type="text" name="nama_kematian"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Asmawi"
                                value="{{ old('nama_kematian') }}" />
                            <small class="nama_kematian_error text-danger" id="error-text"></small>
                            @error('nama_kematian')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Kematian</label>
                        <div class="col-lg-8 fv-row">
                            <input id="tgl_kematian" type="date" name="tgl_kematian"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder=""
                                value="{{ old('tgl_kematian') }}" />
                            <small class="tgl_kematian_error text-danger" id="error-text"></small>
                            @error('tgl_kematian')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Waktu Kematian</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="pukul_kematian" type="time" name="pukul_kematian"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: 12:00"
                                value="{{ old('pukul_kematian') }}" />
                            <small class="pukul_kematian_error text-danger" id="error-text"></small>
                            @error('pukul_kematian')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Sebab Kematian</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <select id="sebab_kematian" name="sebab_kematian" aria-label="Pilih Sebab Kematian"
                                data-control="select2" data-placeholder="Pilih Sebab Kematian..."
                                class="form-select form-select-solid form-select-lg fw-bold">
                                <option value="">Pilih Sebab Kematian...</option>
                                @foreach (get_sebab_kematian() as $sebab_kematian)
                                    <option value="{{ $sebab_kematian->kode }}">{{ $sebab_kematian->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="sebab_kematian_error text-danger" id="error-text"></small>
                            @error('sebab_kematian')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Tempat Kematian</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="tempat_kematian" type="text" name="tempat_kematian"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Cilegon"
                                value="{{ old('tempat_kematian') }}" />
                            <small class="tempat_kematian_error text-danger" id="error-text"></small>
                            @error('tempat_kematian')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Yang Menerangkan</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <select id="menerangkan_kematian" name="menerangkan_kematian"
                                aria-label="Pilih Yang Menerangkan" data-control="select2"
                                data-placeholder="Pilih Yang Menerangkan..."
                                class="form-select form-select-solid form-select-lg fw-bold">
                                <option value="">Pilih Yang Menerangkan...</option>
                                @foreach (get_tenaga_ahli() as $menerangkan_kematian)
                                    <option value="{{ $menerangkan_kematian->kode }}">
                                        {{ $menerangkan_kematian->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="menerangkan_kematian_error text-danger" id="error-text"></small>
                            @error('menerangkan_kematian')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="py-4 text-muted">
                    <hr>
                </div>
                {{-- Data Ortu --}}
                <div id="data-ortu">
                    <h2 class="mb-5 text-primary">Data Orang Tua</h2>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ayah</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_ayah" type="text" name="nama_ayah"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Abdi Rizky"
                                value="{{ old('nama_ayah') }}" />
                            <small class="nama_ayah_error text-danger" id="error-text"></small>
                            @error('nama_ayah')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ayah</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nik_ayah" type="text" name="nik_ayah"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh: 360408121212****" value="{{ old('nik_ayah') }}" />
                            <small class="nik_ayah_error text-danger" id="error-text"></small>
                            @error('nik_ayah')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tempat, Tanggal
                            Lahir Ayah</label>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-8 fv-row">
                                    <input id="tempat_lahir_ayah" type="text" name="tempat_lahir_ayah"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Contoh: Cilegon" value="{{ old('tempat_lahir_ayah') }}" />
                                    <small class="tempat_lahir_ayah_error text-danger" id="error-text"></small>
                                    @error('tempat_lahir_ayah')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-4 fv-row">
                                    <input id="tgl_lahir_ayah" type="date" name="tgl_lahir_ayah"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Contoh: 12-12-1990" value="{{ old('tgl_lahir_ayah') }}" />
                                    <small class="tgl_lahir_ayah_error text-danger" id="error-text"></small>
                                    @error('tgl_lahir_ayah')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Kewarganegaraan Ayah</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <select id="kewarganegaraan_ayah" name="kewarganegaraan_ayah"
                                aria-label="Pilih Kewarganegaraan" data-control="select2"
                                data-placeholder="Pilih Kewarganegaraan..."
                                class="form-select form-select-solid form-select-lg fw-bold">
                                <option value="">Pilih Kewarganegaraan...</option>
                                @foreach (get_negara() as $negara)
                                    <option value="{{ $negara->kode }}">{{ $negara->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="kewarganegaraan_ayah_error text-danger" id="error-text"></small>
                            @error('kewarganegaraan_ayah')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ibu</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_ibu" type="text" name="nama_ibu"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Fitria"
                                value="{{ old('nama_ibu') }}" />
                            <small class="nama_ibu_error text-danger" id="error-text"></small>
                            @error('nama_ibu')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ibu</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nik_ibu" type="text" name="nik_ibu"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh: 360408020202****" value="{{ old('nik_ibu') }}" />
                            <small class="nik_ibu_error text-danger" id="error-text"></small>
                            @error('nik_ibu')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tempat, Tanggal
                            Lahir Ibu</label>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-8 fv-row">
                                    <input id="tempat_lahir_ibu" type="text" name="tempat_lahir_ibu"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Contoh: Cilegon" value="{{ old('tempat_lahir_ibu') }}" />
                                    <small class="tempat_lahir_ibu_error text-danger" id="error-text"></small>
                                    @error('tempat_lahir_ibu')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-4 fv-row">
                                    <input id="tgl_lahir_ibu" type="date" name="tgl_lahir_ibu"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Contoh: 12-12-1990" value="{{ old('tgl_lahir_ibu') }}" />
                                    <small class="tgl_lahir_ibu_error text-danger" id="error-text"></small>
                                    @error('tgl_lahir_ibu')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Kewarganegaraan Ibu</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <select id="kewarganegaraan_ibu" name="kewarganegaraan_ibu"
                                aria-label="Pilih Kewarganegaraan" data-control="select2"
                                data-placeholder="Pilih Kewarganegaraan..."
                                class="form-select form-select-solid form-select-lg fw-bold">
                                <option value="">Pilih Kewarganegaraan...</option>
                                @foreach (get_negara() as $negara)
                                    <option value="{{ $negara->kode }}">{{ $negara->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="kewarganegaraan_ibu_error text-danger" id="error-text"></small>
                            @error('kewarganegaraan_ibu')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="py-4 text-muted">
                    <hr>
                </div>
                {{-- Data Saksi --}}
                <div id="data-saksi">
                    <h2 class="mb-5 text-primary">Data Saksi</h2>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Saksi I</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_saksi_1" type="text" name="nama_saksi_1"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh: Abdi Rizky" value="{{ old('nama_saksi_1') }}" />
                            <small class="nama_saksi_1_error text-danger" id="error-text"></small>
                            @error('nama_saksi_1')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Saksi I</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nik_saksi_1" type="text" name="nik_saksi_1"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh: 360408121212****" value="{{ old('nik_saksi_1') }}" />
                            <small class="nik_saksi_1_error text-danger" id="error-text"></small>
                            @error('nik_saksi_1')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">No KK Saksi I</label>
                        <div class="col-lg-8 fv-row">
                            <input id="no_kk_saksi_1" type="text" name="no_kk_saksi_1"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh: 360408121212****" value="{{ old('no_kk_saksi_1') }}" />
                            <small class="no_kk_saksi_1_error text-danger" id="error-text"></small>
                            @error('no_kk_saksi_1')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Kewarganegaraan Saksi I</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <select id="kewarganegaraan_saksi_1" name="kewarganegaraan_saksi_1"
                                aria-label="Pilih Kewarganegaraan" data-control="select2"
                                data-placeholder="Pilih Kewarganegaraan..."
                                class="form-select form-select-solid form-select-lg fw-bold">
                                <option value="">Pilih Kewarganegaraan...</option>
                                @foreach (get_negara() as $negara)
                                    <option value="{{ $negara->kode }}">{{ $negara->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="kewarganegaraan_saksi_1_error text-danger" id="error-text"></small>
                            @error('kewarganegaraan_saksi_1')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Saksi II</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_saksi_2" type="text" name="nama_saksi_2"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh: Abdi Rizky" value="{{ old('nama_saksi_2') }}" />
                            <small class="nama_saksi_2_error text-danger" id="error-text"></small>
                            @error('nama_saksi_2')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Saksi II</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nik_saksi_2" type="text" name="nik_saksi_2"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh: 360408121212****" value="{{ old('nik_saksi_2') }}" />
                            <small class="nik_saksi_2_error text-danger" id="error-text"></small>
                            @error('nik_saksi_2')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">No KK Saksi II</label>
                        <div class="col-lg-8 fv-row">
                            <input id="no_kk_saksi_2" type="text" name="no_kk_saksi_2"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh: 360408121212****" value="{{ old('no_kk_saksi_2') }}" />
                            <small class="no_kk_saksi_2_error text-danger" id="error-text"></small>
                            @error('no_kk_saksi_2')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Kewarganegaraan Saksi II</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <select id="kewarganegaraan_saksi_2" name="kewarganegaraan_saksi_2"
                                aria-label="Pilih Kewarganegaraan" data-control="select2"
                                data-placeholder="Pilih Kewarganegaraan..."
                                class="form-select form-select-solid form-select-lg fw-bold">
                                <option value="">Pilih Kewarganegaraan...</option>
                                @foreach (get_negara() as $negara)
                                    <option value="{{ $negara->kode }}">{{ $negara->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="kewarganegaraan_saksi_2_error text-danger" id="error-text"></small>
                            @error('kewarganegaraan_saksi_2')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- Catatan --}}
                <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6 mt-15">
                    <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
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
                            <h4 class="text-gray-900 fw-bolder">Catatan</h4>
                            <div class="fs-6 text-gray-700 pe-7">Pelapor siap bertanggung jawab atas pelaporan
                                pencatatan sipil yang akan diajukan!</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href="{{ url('app/layanan') }}" class="btn btn-light btn-active-light-primary me-2">Batal</a>
                <button type="button" class="btn btn-primary" id="btn-pengajuan">Ajukan</button>
            </div>

        </form>
    </div>
</div>
