<div id="data-pembatalan-perkawinan">
    <h3 class="text-primary mb-5">Data Pembatalan Perkawinan</h3>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Perkawinan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_perkawinan)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Akta Perkawinan</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_akta_perkawinan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Akta Perkawinan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_akta_perkawinan)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Pengadilan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_pengadilan_pembatalan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Putusan Pengadilan</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_putusan_pengadilan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Putusan Pengadilan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_putusan_pengadilan)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Pelaporan Perkawinan di Luar Negeri</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_pelaporan_perkawinan_luar_negeri)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIK Ayah Dari Suami</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ayah_dari_suami }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Ayah Dari Suami</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_ayah_dari_suami }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIK Ibu Dari Suami</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ibu_dari_suami }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Ibu Dari Suami</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_ibu_dari_suami }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIK Ayah Dari Istri</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ayah_dari_istri }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Ayah Dari Istri</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_ayah_dari_istri }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIK Ibu Dari Istri</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ibu_dari_istri }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Ibu Dari Istri</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_ibu_dari_istri }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Status Perkawinan Sebelum Kawin</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->status_perkawinan_sebelum_kawin) ? $pengajuan->data_pengajuan->statusPerkawinanSebelumKawin->nama : '' }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Perkawinan Yang Ke</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->perkawinan_yang_ke }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Istri Yang Ke</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->istri_yang_ke }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Pemberkatan Perkawinan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_pemberkatan_perkawinan)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Melapor</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_melapor)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Jam Pelaporan</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->jam_pelaporan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Agama Kepercayaan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->agama_kepercayaan) ? $pengajuan->data_pengajuan->agamaKepercayaan->nama : '' }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Organisasi Kepercayaan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_organisasi_kepercayaan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Pengadilan</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_pengadilan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">No Penetapan Pengadilan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_penetapan_pengadilan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Penetapan Pengadilan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_penepatan_pengadilan)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Pemuka Agama</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_pemuka_agama }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">No Surat Izin Dari Perwakilan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_surat_izin_dari_perwakilan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">No Passport</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_passport }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Perjanjian Perkawinan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->perjanjian_perkawinan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">No Akta Notaris</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_akta_notaris }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Akta Notaris</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_akta_notaris)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Jumlah Anak</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->jumlah_anak }}</span>
        </div>
    </div>
</div>
