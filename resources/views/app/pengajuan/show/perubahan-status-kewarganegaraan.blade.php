<div id="data-perubahan-status-kewarganegaraan">
    <h3 class="text-primary mb-5">Data Perubahan Status Kewarganegaraan</h3>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan Baru</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->kewarganegaraan_baru }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Akta Kelahiran</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_akta_kelahiran }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Akta Perkawinan</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_akta_perkawinan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Suami / Istri</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_suami_istri }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIK Suami / Istri</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_suami_istri }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Passport</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_passport }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Afidavit</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_afidavit }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Keputusan Presiden</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_keputusan_presiden }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Keputusan Presiden</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_keputusan_presiden)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Berita Acara Sumpah / Janji Setia</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_berita_acara_sumpah }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Jabatan yang Menerbitkan BAS / Janji Setia</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_jabatan_yang_menerbitkan_bas }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Penerbitan Sumpah Janji</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_penerbitan_sumpah_janji)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Keputusan Menteri (Bidang Kewarganegaraan)</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_keputusan_menteri }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Keputusan Menteri</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_keputusan_menteri)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
</div>
