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
                <div id="data-perubahan-nama">
                    {{-- <h2 class="mb-5 text-primary">Data Anak</h2> --}}
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Lama</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_lama" type="text" name="nama_lama"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Asmawi"
                                value="{{ old('nama_lama') }}" />
                            <small class="nama_lama_error text-danger" id="error-text"></small>
                            @error('nama_lama')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Baru</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_baru" type="text" name="nama_baru"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Jokowi"
                                value="{{ old('nama_baru') }}" />
                            <small class="nama_baru_error text-danger" id="error-text"></small>
                            @error('nama_baru')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">No Akta Kelahiran</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nomor_akta_kelahiran" type="text" name="nomor_akta_kelahiran"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh : xxx"
                                value="{{ old('nomor_akta_kelahiran') }}" />
                            <small class="nomor_akta_kelahiran_error text-danger" id="error-text"></small>
                            @error('nomor_akta_kelahiran')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Nama Ibu</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_ibu" type="text" name="nama_ibu"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: Riwan"
                                value="{{ old('nama_ibu') }}" />
                            <div class="form-text">Bagi yang dibawah Umur</div>
                            <small class="nama_ibu_error text-danger" id="error-text"></small>
                            @error('nama_ibu')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">NIK Ibu</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nik_ibu" type="text" name="nik_ibu"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxxx"
                                value="{{ old('nik_ibu') }}" />
                            <small class="nik_ibu_error text-danger" id="error-text"></small>
                            @error('nik_ibu')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Kewarganegaraan</span>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <select id="kewarganegaraan" name="kewarganegaraan" aria-label="Pilih Kewarganegaraan"
                                data-control="select2" data-placeholder="Pilih Kewarganegaraan..."
                                class="form-select form-select-solid form-select-lg fw-bold">
                                <option value="">Pilih Kewarganegaraan...</option>
                                @foreach (get_negara() as $negara)
                                    <option value="{{ $negara->kode }}">{{ $negara->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="kewarganegaraan_error text-danger" id="error-text"></small>
                            @error('kewarganegaraan')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nomor Penetapan Pengadilan
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input id="nomor_penetapan_pengadilan" type="text" name="nomor_penetapan_pengadilan"
                                class="form-control form-control-lg form-control-solid" placeholder="Contoh: xxxx"
                                value="{{ old('nomor_penetapan_pengadilan') }}" />

                            <small class="nomor_penetapan_pengadilan_error text-danger" id="error-text"></small>
                            @error('nomor_penetapan_pengadilan')
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
                            <input id="tgl_penetapan_pengadilan" type="date" name="tgl_penetapan_pengadilan"
                                class="form-control form-control-lg form-control-solid" placeholder=""
                                value="{{ old('tgl_penetapan_pengadilan') }}" />
                            <small class="tgl_penetapan_pengadilan_error text-danger" id="error-text"></small>
                            @error('tgl_penetapan_pengadilan')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Lembaga Pengadilan</label>
                        <div class="col-lg-8 fv-row">
                            <input id="nama_lembaga_pengadilan" type="text" name="nama_lembaga_pengadilan"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder=""
                                value="{{ old('nama_lembaga_pengadilan') }}" />
                            <small class="nama_lembaga_pengadilan_error text-danger" id="error-text"></small>
                            @error('nama_lembaga_pengadilan')
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
