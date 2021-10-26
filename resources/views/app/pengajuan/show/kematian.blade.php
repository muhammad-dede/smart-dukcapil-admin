<div id="data-kematian">
    <h3 class="text-primary mb-5">Data Kematian</h3>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIK</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_kematian }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Lengkap</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_kematian }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tanggal Kematian</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ \Carbon\Carbon::parse($pengajuan->data_pengajuan->tgl_kematian)->isoFormat('D MMMM Y') }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Pukul Kematian</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->pukul_kematian }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Sebab Kematian</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->sebab_kematian) ? $pengajuan->data_pengajuan->sebabKematian->nama : '' }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Tempat Kematian</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->tempat_kematian }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Yang Menerangkan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ !empty($pengajuan->data_pengajuan->menerangkan_kematian) ? $pengajuan->data_pengajuan->yangMenerangkan->nama : '' }}</span>
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
            <span class="fw-bolder fs-6 text-gray-800">{{ ucwords($pengajuan->data_pengajuan->nama_saksi_2) }}</span>
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
