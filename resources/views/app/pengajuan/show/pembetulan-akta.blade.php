<div id="data-pembetulan-akta">
    <h3 class="text-primary mb-5">Data Pembetulan Akta</h3>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nomor Akta yang Akan dibetulkan</label>
        <div class="col-lg-8">
            <span
                class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nomor_akta_yang_akan_dibetulkan }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">Nama Ayah / Ibu / Wali</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nama_ayah_ibu_wali }}</span>
        </div>
    </div>
    <div class="row mb-7">
        <label class="col-lg-4 fw-bold text-muted">NIK Ayah / Ibu / Wali</label>
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ $pengajuan->data_pengajuan->nik_ayah_ibu_wali }}</span>
        </div>
    </div>

</div>
