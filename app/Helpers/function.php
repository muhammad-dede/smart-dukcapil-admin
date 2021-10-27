<?php

function get_tempat_dilahirkan()
{
    $all_data = \App\Models\_TempatDilahirkan::all();
    return $all_data;
}
function get_hari()
{
    $all_data = \App\Models\_Hari::all();
    return $all_data;
}
function get_jenis_kelahiran()
{
    $all_data = \App\Models\_JenisKelahiran::all();
    return $all_data;
}
function get_tenaga_ahli()
{
    $all_data = \App\Models\_TenagaAhli::all();
    return $all_data;
}
function get_negara()
{
    $all_data = \App\Models\_Negara::all();
    return $all_data;
}
function get_status_kawin()
{
    $all_data = \App\Models\_StatusKawin::all();
    return $all_data;
}
function get_agama()
{
    $all_data = \App\Models\_Agama::all();
    return $all_data;
}

function get_sebab_kematian()
{
    $all_data = \App\Models\_SebabKematian::all();
    return $all_data;
}

function get_peristiwa_penting()
{
    $all_data = \App\Models\_PeristiwaPenting::all();
    return $all_data;
}

function get_lamanya_dalam_kandungan()
{
    $data = [];

    for ($x = 1; $x < 13; $x++) {
        $data[] = [
            'bulan' => sprintf("%02s", $x)
        ];
    }

    return $data;
}

function get_status_pengajuan($id)
{
    $pengajuan = \App\Models\Pengajuan::where('id', $id)->first();
    $persyaratan = \App\Models\Persyaratan::where('id_layanan', $pengajuan->id_layanan)->count();
    if ($persyaratan > 0) {
        $upload_pengajuan_berkas = \App\Models\PengajuanBerkas::where('id_pengajuan', $pengajuan->id)->where('upload', false);
        if ($upload_pengajuan_berkas->count() > 0) {
            $kode = 'Incompleted';
            $color = 'warning';
            $status = 'Berkas Persyaratan Tidak Lengkap';
            $text = $upload_pengajuan_berkas->count() . ' berkas belum diupload, mohon untuk melengkapi data persyaratan untuk proses verifikasi.';
        } else {
            // $invalid_pengajuan_berkas = \App\Models\PengajuanBerkas::where('id_pengajuan', $pengajuan->id)->where('valid', false)->get();
            // if ($invalid_pengajuan_berkas->count() > 0) {
            //     $kode = 'Invalid';
            //     $color = 'danger';
            //     $status = 'Berkas Tidak Valid';
            //     $text = $invalid_pengajuan_berkas->count() . ' berkas tidak valid, mohon untuk mengupload ulang berkas persyaratan anda.';
            // } else {
            //     $kode = $pengajuan->status;
            //     $color = $pengajuan->statusPengajuan->color;
            //     $status = $pengajuan->status == 'V' ? 'Sedang Diverikasi' : ($pengajuan->status == 'Y' ? 'Pengajuan Diterima' : 'Pengajuan Ditolak');
            //     $text = $pengajuan->statusPengajuan->pesan;
            // }
            $kode = $pengajuan->status;
            $color = $pengajuan->statusPengajuan->color;
            $status = $pengajuan->status == 'V' ? 'Belum Diverikasi' : ($pengajuan->status == 'Y' ? 'Diterima' : 'Ditolak');
            $text = $pengajuan->statusPengajuan->pesan;
        }
    } else {
        $kode = $pengajuan->status;
        $color = $pengajuan->statusPengajuan->color;
        $status = $pengajuan->status == 'V' ? 'Belum Diverikasi' : ($pengajuan->status == 'Y' ? 'Diterima' : 'Ditolak');
        $text = $pengajuan->statusPengajuan->pesan;
    }

    $status_pengajuan = (object) [
        'kode' => $kode,
        'color' => $color,
        'status' => $status,
        'text' => $text,
    ];
    return $status_pengajuan;
}

function get_notifikasi()
{
    $pengajuan = \App\Models\Pengajuan::where('status', 'V')->get();

    $get_notifikasi = (object) [
        'count_notifikasi' => $pengajuan->count(),
        'data_notifikasi' => $pengajuan,
    ];
    return $get_notifikasi;
}
