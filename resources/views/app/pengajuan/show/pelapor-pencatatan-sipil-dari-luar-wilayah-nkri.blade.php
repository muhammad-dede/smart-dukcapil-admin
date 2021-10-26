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
