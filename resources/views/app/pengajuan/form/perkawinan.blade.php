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
                {{-- Data Perkawinan --}}
                <div id="data-perkawinan">
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ayah dari Suami</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nik_ayah_dari_suami" type="text" name="nik_ayah_dari_suami"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh: 360408121212****" value="{{ old('nik_ayah_dari_suami') }}" />
                            <small class="nik_ayah_dari_suami_error text-danger" id="error-text"></small>
                            @error('nik_ayah_dari_suami')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ayah dari Suami</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_ayah_dari_suami" type="text" name="nama_ayah_dari_suami"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Asmawi"
                                value="{{ old('nama_ayah_dari_suami') }}" />
                            <small class="nama_ayah_dari_suami_error text-danger" id="error-text"></small>
                            @error('nama_ayah_dari_suami')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ibu dari Suami</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nik_ibu_dari_suami" type="text" name="nik_ibu_dari_suami"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh: 360408121212****" value="{{ old('nik_ibu_dari_suami') }}" />
                            <small class="nik_ibu_dari_suami_error text-danger" id="error-text"></small>
                            @error('nik_ibu_dari_suami')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ibu dari Suami</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_ibu_dari_suami" type="text" name="nama_ibu_dari_suami"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Lilis"
                                value="{{ old('nama_ibu_dari_suami') }}" />
                            <small class="nama_ibu_dari_suami_error text-danger" id="error-text"></small>
                            @error('nama_ibu_dari_suami')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ayah dari Istri</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nik_ayah_dari_istri" type="text" name="nik_ayah_dari_istri"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh: 360408121212****" value="{{ old('nik_ayah_dari_istri') }}" />
                            <small class="nik_ayah_dari_istri_error text-danger" id="error-text"></small>
                            @error('nik_ayah_dari_istri')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ayah dari Istri</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_ayah_dari_istri" type="text" name="nama_ayah_dari_istri"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Asmawi"
                                value="{{ old('nama_ayah_dari_istri') }}" />
                            <small class="nama_ayah_dari_istri_error text-danger" id="error-text"></small>
                            @error('nama_ayah_dari_istri')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK Ibu dari Istri</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nik_ibu_dari_istri" type="text" name="nik_ibu_dari_istri"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh: 360408121212****" value="{{ old('nik_ibu_dari_istri') }}" />
                            <small class="nik_ibu_dari_istri_error text-danger" id="error-text"></small>
                            @error('nik_ibu_dari_istri')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Ibu dari Istri</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_ibu_dari_istri" type="text" name="nama_ibu_dari_istri"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Lilis"
                                value="{{ old('nama_ibu_dari_istri') }}" />
                            <small class="nama_ibu_dari_istri_error text-danger" id="error-text"></small>
                            @error('nama_ibu_dari_istri')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Status Perkawinan Sebelum Kawin</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <select id="status_perkawinan_sebelum_kawin" name="status_perkawinan_sebelum_kawin"
                                aria-label="Pilih Status Perkawinan Sebelum Kawin" data-control="select2"
                                data-placeholder="Pilih Status Perkawinan Sebelum Kawin..."
                                class="form-select form-select-solid form-select-lg fw-bold">
                                <option value="">Pilih Status Perkawinan Sebelum Kawin...</option>
                                @foreach (get_status_kawin() as $status_kawin)
                                    <option value="{{ $status_kawin->kode }}">{{ $status_kawin->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="status_perkawinan_sebelum_kawin_error text-danger" id="error-text"></small>
                            @error('status_perkawinan_sebelum_kawin')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Perkawinan yang ke -</label>
                        <div class="col-lg-8 fv-row">
                            <input id="perkawinan_yang_ke" type="number" name="perkawinan_yang_ke"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: 1"
                                value="{{ old('perkawinan_yang_ke') }}" />
                            <small class="perkawinan_yang_ke_error text-danger" id="error-text"></small>
                            @error('perkawinan_yang_ke')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Istri yang ke - </label>
                        <div class="col-lg-8 fv-row">
                            <input id="istri_yang_ke" type="number" name="istri_yang_ke"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: 2"
                                value="{{ old('istri_yang_ke') }}" />
                            <small class="istri_yang_ke_error text-danger" id="error-text"></small>
                            @error('istri_yang_ke')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Pemberkatan
                            Perkawinan</label>
                        <div class="col-lg-8 fv-row">
                            <input id="tgl_pemberkatan_perkawinan" type="date" name="tgl_pemberkatan_perkawinan"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder=""
                                value="{{ old('tgl_pemberkatan_perkawinan') }}" />
                            <small class="tgl_pemberkatan_perkawinan_error text-danger" id="error-text"></small>
                            @error('tgl_pemberkatan_perkawinan')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Melapor</label>
                        <div class="col-lg-8 fv-row">
                            <input id="tgl_melapor" type="date" name="tgl_melapor"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder=""
                                value="{{ old('tgl_melapor') }}" />
                            <small class="tgl_melapor_error text-danger" id="error-text"></small>
                            @error('tgl_melapor')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Jam Pelaporan</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="jam_pelaporan" type="time" name="jam_pelaporan"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: 12:00"
                                value="{{ old('jam_pelaporan') }}" />
                            <small class="jam_pelaporan_error text-danger" id="error-text"></small>
                            @error('jam_pelaporan')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Agama Kepercayaan</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <select id="agama_kepercayaan" name="agama_kepercayaan" aria-label="Pilih Agama Kepercayaan"
                                data-control="select2" data-placeholder="Pilih Agama Kepercayaan..."
                                class="form-select form-select-solid form-select-lg fw-bold">
                                <option value="">Pilih Agama Kepercayaan...</option>
                                @foreach (get_agama() as $agama)
                                    <option value="{{ $agama->kode }}">{{ $agama->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="agama_kepercayaan_error text-danger" id="error-text"></small>
                            @error('agama_kepercayaan')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Nama Organisasi Kepercayaan</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_organisasi_kepercayaan" type="text" name="nama_organisasi_kepercayaan"
                                class="form-control form-control-lg form-control-solid" placeholder=""
                                value="{{ old('nama_organisasi_kepercayaan') }}" />
                            <small class="nama_organisasi_kepercayaan_error text-danger" id="error-text"></small>
                            @error('nama_organisasi_kepercayaan')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Nama Pengadilan</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_pengadilan" type="text" name="nama_pengadilan"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh : Pengadilan Agama Kota Cilegon"
                                value="{{ old('nama_pengadilan') }}" />
                            <small class="nama_pengadilan_error text-danger" id="error-text"></small>
                            @error('nama_pengadilan')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Nomor Penetapan Pengadilan</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="no_penetapan_pengadilan" type="text" name="no_penetapan_pengadilan"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh : xxxxx"
                                value="{{ old('nama_pengadilan') }}" />
                            <small class="no_penetapan_pengadilan_error text-danger" id="error-text"></small>
                            @error('no_penetapan_pengadilan')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Penetapan
                            Pengadilan</label>
                        <div class="col-lg-8 fv-row">
                            <input id="tgl_penepatan_pengadilan" type="date" name="tgl_penepatan_pengadilan"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder=""
                                value="{{ old('tgl_penepatan_pengadilan') }}" />
                            <small class="tgl_penepatan_pengadilan_error text-danger" id="error-text"></small>
                            @error('tgl_penepatan_pengadilan')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Nama Pemuka Agama</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_pemuka_agama" type="text" name="nama_pemuka_agama"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh : Ustadz muhi" value="{{ old('nama_pemuka_agama') }}" />
                            <small class="nama_pemuka_agama_error text-danger" id="error-text"></small>
                            @error('nama_pemuka_agama')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Nomor Surat Izin dari Perwakilan</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="no_surat_izin_dari_perwakilan" type="text" name="no_surat_izin_dari_perwakilan"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh : xxxxx"
                                value="{{ old('no_surat_izin_dari_perwakilan') }}" />
                            <small class="no_surat_izin_dari_perwakilan_error text-danger" id="error-text"></small>
                            @error('no_surat_izin_dari_perwakilan')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Nomor Passport</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="no_passport" type="text" name="no_passport"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh : xxxxx"
                                value="{{ old('no_passport') }}" />
                            <small class="no_passport_error text-danger" id="error-text"></small>
                            @error('no_passport')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Perjanjian Perkawinan dibuat oleh Notaris</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="perjanjian_perkawinan" type="text" name="perjanjian_perkawinan"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh : Dede, S.H" value="{{ old('perjanjian_perkawinan') }}" />
                            <small class="perjanjian_perkawinan_error text-danger" id="error-text"></small>
                            @error('perjanjian_perkawinan')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Nomor Akta Notaris</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="no_akta_notaris" type="text" name="no_akta_notaris"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh : xxxx"
                                value="{{ old('no_akta_notaris') }}" />
                            <small class="no_akta_notaris_error text-danger" id="error-text"></small>
                            @error('no_akta_notaris')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Tanggal Akta Notaris</label>
                        <div class="col-lg-8 fv-row">
                            <input id="tgl_akta_notaris" type="date" name="tgl_akta_notaris"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder=""
                                value="{{ old('tgl_akta_notaris') }}" />
                            <small class="tgl_akta_notaris_error text-danger" id="error-text"></small>
                            @error('tgl_akta_notaris')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Jumlah Anak</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="jumlah_anak" type="text" name="jumlah_anak"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh : 2"
                                value="{{ old('jumlah_anak') }}" />
                            <small class="jumlah_anak_error text-danger" id="error-text"></small>
                            @error('jumlah_anak')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- Catatan --}}
                <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6 mt-10">
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
