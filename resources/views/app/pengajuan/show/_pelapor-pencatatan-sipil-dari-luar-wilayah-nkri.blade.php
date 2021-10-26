<div class="card mb-5 mb-xl-10" id="kt_details_view">
    <div class="card-header">
        <div
            class="notice bg-light-{{ $status_pengajuan->color }} rounded border-{{ $status_pengajuan->color }} border border-dashed p-6 my-8 w-100">
            <div class="row">
                <div class="col-md-7 mb-3">
                    <h3 class="text-gray-900 fw-bolder mt-1">{{ $pengajuan->layanan->layanan }}</h3>
                    <div class="row mb-1">
                        <label class="col-lg-4 fw-bold text-muted">Tanggal Pengajuan</label>
                        <div class="col-lg-8">
                            <span
                                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->tgl)->isoFormat('dddd, D MMMM Y') }}</span>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label class="col-lg-4 fw-bold text-muted">Status Pengajuan</label>
                        <div class="col-lg-8">
                            <span
                                class="fw-bolder fs-6 text-{{ $status_pengajuan->color }}"><em>{{ $status_pengajuan->status }}</em></span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                    id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ubah Status Pengajuan
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                    <li>
                                        <form action="{{ url('pengajuan/status/', 'terima') }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <button id="btn-terima" class="dropdown-item">Terima</button>
                                        </form>
                                    </li>
                                    <li>
                                        <form action="{{ url('pengajuan/status/', 'tolak') }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <button id="btn-tolak" class="dropdown-item">Tolak</button>
                                        </form>
                                    </li>
                                    @if (auth()->user()->is_admin)
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <form action="{{ url('pengajuan/status/', 'reset') }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <button id="btn-reset" class="dropdown-item">Atur Ulang Status</button>
                                            </form>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h3 class="text-gray-900 fw-bolder">Data Pelapor</h3>
                    <div class="row mb-1">
                        <label class="col-lg-4 fw-bold text-muted">Nama</label>
                        <div class="col-lg-8">
                            <span
                                class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->pelapor->nama_lengkap) }}</span>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label class="col-lg-4 fw-bold text-muted">NIK</label>
                        <div class="col-lg-8">
                            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->pelapor->nik }}</span>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label class="col-lg-4 fw-bold text-muted">No Kartu Keluarga</label>
                        <div class="col-lg-8">
                            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->pelapor->no_kk }}</span>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan</label>
                        <div class="col-lg-8">
                            <span
                                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->pelapor->kewarganegaraan) ? $pengajuan->pelapor->kewargaNegaraan->nama : '' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body p-9">
        <div id="data-pelapor-pencatatan-sipil-dari-luar-wilayah-nkri">
            <h3 class="text-primary mb-5">Data Pembatalan Akta</h3>
            <div class="row mb-7">
                <label class="col-lg-5 fw-bold text-muted">Jenis Peristiwa Penting</label>
                <div class="col-lg-7">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->jenis_peristiwa_penting) ? $pengajuan->data_pengajuan->peristiwaPenting->nama : '' }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-5 fw-bold text-muted">Nomor Surat Keterangan Pelaporan Pencatatan Sipil dari
                    Perwakilan RI</label>
                <div class="col-lg-7">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_surat_keterangan_pelaporan_perwakilan_ri }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-5 fw-bold text-muted">Tanggal Surat Keterangan Pelaporan Pencatatan Sipil dari
                    Perwakilan RI</label>
                <div class="col-lg-7">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_surat_keterangan_pelaporan_perwakilan_ri)->isoFormat('D MMMM Y') }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-5 fw-bold text-muted">Kantor Perwakilan yang Melakukan Pencatatan</label>
                <div class="col-lg-7">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->kantor_perwakilan_yang_melakukan_pencatatan }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-5 fw-bold text-muted">Nomor Bukti Pencatatan Sipil dari Negara Setempat</label>
                <div class="col-lg-7">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_bukti_pencatatan_sipil_dari_negara_setempat }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-5 fw-bold text-muted">Tanggal Penerbitan dari Negara Setempat</label>
                <div class="col-lg-7">
                    <span
                        class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_penerbitan_dari_negara_setempat)->isoFormat('D MMMM Y') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
