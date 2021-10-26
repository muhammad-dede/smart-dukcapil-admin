<div id="data-pengangkatan-anak">
    <h3 class="text-primary mb-5">Data Pengangkatan Anak</h3>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Anak Angkat</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_anak_angkat }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Akta Kelahiran</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_akta_kelahiran }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Penerbitan Akta Kelahiran</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_penerbitan_akta_kelahiran)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Dinas yang Menerbitkan Akta Kelahiran</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->dinas_yang_menerbitkan_akta_kelahiran }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Ibu Kandung</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_ibu_kandung }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIk Ibu Kandung</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ibu_kandung }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->kewarganegaraan_ibu) ? $pengajuan->data_pengajuan->kewarganegaraanIbu->nama : '' }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Ayah Kandung</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_ayah_kandung }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIk Ayah Kandung</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ayah_kandung }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->kewarganegaraan_ayah) ? $pengajuan->data_pengajuan->kewarganegaraanAyah->nama : '' }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Ibu Angkat</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_ibu_angkat }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIk Ibu Angkat</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ibu_angkat }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Passport</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_passport_ibu }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Ayah Angkat</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_ayah_angkat }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIk Ayah Angkat</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ayah_angkat }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Passport</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_passport_ayah }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Pengadilan</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_pengadilan }}</span>
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
        <label class="col-lg-4 fw-bold text-muted">Nomor Penetapan Pengadilan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_penetapan_pengadilan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Lembaga Penetapan Pengadilan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_lembaga_penetapan_pengadilan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tempat Lembaga Penetapan Pengadilan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->tempat_lembaga_penetapan_pengadilan }}</span>
        </div>
    </div>
</div>
