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
    if ($pengajuan->terima == 'Y') {
        $color = 'success';
        $status = 'Pengajuan Diterima';
        $text = 'Pengajuan Anda memenuhi persyaratan kami, kunjungi Dinas Kependudukan dan Catatan Sipil Kota Cilegon serta membawa print out berkas persyaratan yang telah Anda Upload!';
    } elseif ($pengajuan->terima == 'N') {
        $color = 'danger';
        $status = 'Pengajuan Ditolak';
        $text = 'Pengajuan Anda tidak memenuhi persyaratan kami, Anda dapat melakukan pengajuan kembali setelah hari ini atau Anda dapat mengunjungi langsung Dinas Kependudukan dan Catatan Sipil Kota Cilegon!';
    } else {
        $persyaratan = \App\Models\Persyaratan::where('id_layanan', $pengajuan->id_layanan)->count();
        if ($persyaratan > 0) {
            $pengajuan_berkas =  \App\Models\PengajuanBerkas::where('id_pengajuan', $pengajuan->id);
            if ($pengajuan_berkas->count() == 0) {
                $color = 'warning';
                $status = 'Berkas Persyaratan Belum Di-Upload ';
                $text = 'Anda belum upload berkas persyaratan.';
            } else {
                $invalid_pengajuan_berkas = \App\Models\PengajuanBerkas::where('id_pengajuan', $pengajuan->id)->where('valid', false)->get();
                if ($invalid_pengajuan_berkas->count() > 0) {
                    $color = 'danger';
                    $status = 'Berkas Tidak Valid';
                    $text = $invalid_pengajuan_berkas->count() . ' berkas tidak valid, mohon untuk mengupload ulang berkas persyaratan anda.';
                } else {
                    $color = 'info';
                    $status = 'Belum Diverifikasi';
                    $text = 'Mohon menunggu, Pengajuan Anda sedang diverifikasi oleh Admin kami.';
                }
            }
        } else {
            $color = 'info';
            $status = 'Belum Diverifikasi';
            $text = 'Mohon menunggu, Pengajuan Anda sedang diverifikasi oleh Admin kami.';
        }
    }

    $status_pengajuan = (object) [
        'color' => $color,
        'status' => $status,
        'text' => $text,
    ];
    return $status_pengajuan;
}
