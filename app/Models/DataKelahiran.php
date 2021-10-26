<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKelahiran extends Model
{
    use HasFactory;

    protected $table = 'data_kelahiran';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function pengajuan()
    {
        return $this->morphOne(Pengajuan::class, 'data_pengajuan');
    }

    public function tempatDilahirkanAnak()
    {
        return $this->belongsTo(_TempatDilahirkan::class, 'tmpt_dilahirkan_anak', 'kode');
    }

    public function hariLahirAnak()
    {
        return $this->belongsTo(_Hari::class, 'hari_lahir_anak', 'kode');
    }

    public function jenisKelahiranAnak()
    {
        return $this->belongsTo(_JenisKelahiran::class, 'jenis_kelahiran_anak', 'kode');
    }

    public function penolongKelahiranAnak()
    {
        return $this->belongsTo(_TenagaAhli::class, 'penolong_kelahiran_anak', 'kode');
    }

    public function kewarganegaraanAyah()
    {
        return $this->belongsTo(_Negara::class, 'kewarganegaraan_ayah', 'kode');
    }

    public function kewarganegaraanIbu()
    {
        return $this->belongsTo(_Negara::class, 'kewarganegaraan_ibu', 'kode');
    }

    public function kewarganegaraanSaksi1()
    {
        return $this->belongsTo(_Negara::class, 'kewarganegaraan_saksi_1', 'kode');
    }

    public function kewarganegaraanSaksi2()
    {
        return $this->belongsTo(_Negara::class, 'kewarganegaraan_saksi_2', 'kode');
    }
}
