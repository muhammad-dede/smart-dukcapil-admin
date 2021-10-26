<div id="data-anak">
    <h3 class="text-primary mb-5">Data Anak</h3>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->nama_anak) }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Jenis Kelamin</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->jenis_kelamin_anak == 'L' ? 'Laki-laki' : 'Perempuan' }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tempat Dilahirkan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->tmpt_dilahirkan_anak) ? $pengajuan->data_pengajuan->tempatDilahirkanAnak->nama : '' }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tempat Kelahiran</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->tmpt_kelahiran_anak }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Hari Kelahiran</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->hari_lahir_anak) ? $pengajuan->data_pengajuan->hariLahirAnak->nama : '' }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Lahir</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_lahir_anak)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Waktu Lahir</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->waktu_lahir_anak }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Jenis Kelahiran</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->jenis_kelahiran_anak) ? $pengajuan->data_pengajuan->jenisKelahiranAnak->nama : '' }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Kelahiran Ke</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->kelahiran_ke_anak }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Penolong Kelahiran</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->penolong_kelahiran_anak) ? $pengajuan->data_pengajuan->penolongKelahiranAnak->nama : '' }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Berat Bayi</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->berat_bayi_anak }}
                KG</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Panjang Bayi</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->panjang_bayi_anak }}
                CM</span>
        </div>
    </div>
</div>
<div class="mb-3 text-muted">
    <hr>
</div>
<div id="data-ortu">
    <h3 class="text-primary mb-5">Data Ortu</h3>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Ayah</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->nama_ayah) }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIK Ayah</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ayah }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tempat Lahir Ayah</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->tempat_lahir_ayah) }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Lahir Ayah</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_lahir_ayah)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan Ayah</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->kewarganegaraan_ayah) ? $pengajuan->data_pengajuan->kewarganegaraanAyah->nama : '' }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Ibu</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->nama_ibu) }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIK Ibu</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ibu }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tempat Lahir Ibu</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->tempat_lahir_ibu) }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Lahir Ibu</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_lahir_ibu)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan Ibu</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->kewarganegaraan_ibu) ? $pengajuan->data_pengajuan->kewarganegaraanIbu->nama : '' }}</span>
        </div>
    </div>
</div>
<div class="mb-3 text-muted">
    <hr>
</div>
<div id="data-saksi">
    <h3 class="text-primary mb-5">Data Saksi</h3>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Saksi 1</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->nama_saksi_1) }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIK Saksi 1</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_saksi_1 }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">No KK Saksi 1</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_kk_saksi_1 }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan Saksi 1</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->kewarganegaraan_saksi_1) ? $pengajuan->data_pengajuan->kewarganegaraanSaksi1->nama : '' }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Saksi 2</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->nama_saksi_2) }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIK Saksi 1</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_saksi_2 }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">No KK Saksi 1</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->no_kk_saksi_2 }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Kewarganegaraan Saksi 1</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->kewarganegaraan_saksi_2) ? $pengajuan->data_pengajuan->kewarganegaraanSaksi2->nama : '' }}</span>
        </div>
    </div>
</div>
