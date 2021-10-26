<div id="data-perubahan-nama">
    <h3 class="text-primary mb-5">Data Perubahan Nama</h3>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Lama</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_lama }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Baru</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_baru }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Akta Kelahiran</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_akta_kelahiran }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Ibu</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_ibu }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIk Ibu</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ibu }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->kewarganegaraan) ? $pengajuan->data_pengajuan->kewarganegaraan : '' }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Penetapan Pengadilan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_penetapan_pengadilan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Penetapan Pengadilan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_penetapan_pengadilan)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Lembaga Pengadilan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_lembaga_pengadilan }}</span>
        </div>
    </div>
</div>
