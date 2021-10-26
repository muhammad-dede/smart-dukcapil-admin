<div id="data-pembatalam-akta">
    <h3 class="text-primary mb-5">Data Pembatalan Akta</h3>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted"> Akta yang dibatalkan</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->akta_yang_dibatalkan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Akta yang dibatalkan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_akta_yang_dibatalkan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Pengadilan</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_pengadilan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Putusan Pengadilan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_putusan_pengadilan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Putusan Pengadilan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_putusan_pengadilan)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
</div>
