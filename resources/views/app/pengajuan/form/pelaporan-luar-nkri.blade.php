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
                <div id="data-pelapor-pencatatan-sipil-dari-luar-wilayah-nkri">
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Jenis Peristiwa Penting</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <select id="jenis_peristiwa_penting" name="jenis_peristiwa_penting"
                                aria-label="Pilih Peristiwa Penting" data-control="select2"
                                data-placeholder="Pilih Peristiwa Penting..."
                                class="form-select form-select-solid form-select-lg fw-bold">
                                <option value="">Pilih Jenis Kelahiran...</option>
                                @foreach (get_peristiwa_penting() as $peristiwa_penting)
                                    <option value="{{ $peristiwa_penting->kode }}">{{ $peristiwa_penting->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="jenis_peristiwa_penting_error text-danger" id="error-text"></small>
                            @error('jenis_peristiwa_penting')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Nomor Surat Keterangan Pelaporan Pencatatan Sipil dari
                                Perwakilan RI</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="nomor_surat_keterangan_pelaporan_perwakilan_ri" type="text"
                                name="nomor_surat_keterangan_pelaporan_perwakilan_ri"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxx"
                                value="{{ old('nomor_surat_keterangan_pelaporan_perwakilan_ri') }}" />
                            <small class="nomor_surat_keterangan_pelaporan_perwakilan_ri_error text-danger"
                                id="error-text"></small>
                            @error('nomor_surat_keterangan_pelaporan_perwakilan_ri')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Tanggal Surat Keterangan Pelaporan Pencatatan Sipil dari
                                Perwakilan RI</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="tgl_surat_keterangan_pelaporan_perwakilan_ri" type="date"
                                name="tgl_surat_keterangan_pelaporan_perwakilan_ri"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxx"
                                value="{{ old('tgl_surat_keterangan_pelaporan_perwakilan_ri') }}" />
                            <small class="tgl_surat_keterangan_pelaporan_perwakilan_ri_error text-danger"
                                id="error-text"></small>
                            @error('tgl_surat_keterangan_pelaporan_perwakilan_ri')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Kantor Perwakilan yang Melakukan Pencatatan</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="kantor_perwakilan_yang_melakukan_pencatatan" type="text"
                                name="kantor_perwakilan_yang_melakukan_pencatatan"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Contoh: Imigrasi Kota Cilegon"
                                value="{{ old('kantor_perwakilan_yang_melakukan_pencatatan') }}" />
                            <small class="kantor_perwakilan_yang_melakukan_pencatatan_error text-danger"
                                id="error-text"></small>
                            @error('kantor_perwakilan_yang_melakukan_pencatatan')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Nomor Bukti Pencatatan Sipil dari Negara
                                setempat</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="nomor_bukti_pencatatan_sipil_dari_negara_setempat" type="text"
                                name="nomor_bukti_pencatatan_sipil_dari_negara_setempat"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxx"
                                value="{{ old('nomor_bukti_pencatatan_sipil_dari_negara_setempat') }}" />
                            <small class="nomor_bukti_pencatatan_sipil_dari_negara_setempat_error text-danger"
                                id="error-text"></small>
                            @error('nomor_bukti_pencatatan_sipil_dari_negara_setempat')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Tanggal Penerbitan dari Negara Setempat</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="tgl_penerbitan_dari_negara_setempat" type="date"
                                name="tgl_penerbitan_dari_negara_setempat"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxx"
                                value="{{ old('tgl_penerbitan_dari_negara_setempat') }}" />
                            <small class="tgl_penerbitan_dari_negara_setempat_error text-danger"
                                id="error-text"></small>
                            @error('tgl_penerbitan_dari_negara_setempat')
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
                            <div class="fs-6 text-gray-700 pe-7">Pelapor siap bertanggung jawab atas
                                pelaporan
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
