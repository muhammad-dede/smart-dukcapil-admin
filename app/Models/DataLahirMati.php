<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLahirMati extends Model
{
    use HasFactory;

    protected $table = 'data_lahir_mati';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function pengajuan()
    {
        return $this->morphOne(Pengajuan::class, 'data_pengajuan');
    }

    public function jenisKelahiran()
    {
        return $this->belongsTo(_JenisKelahiran::class, 'jenis_kelahiran', 'kode');
    }

    public function tempatDilahirkan()
    {
        return $this->belongsTo(_TempatDilahirkan::class, 'tempat_dilahirkan', 'kode');
    }

    public function penolongKelahiran()
    {
        return $this->belongsTo(_TenagaAhli::class, 'penolong_kelahiran', 'kode');
    }

    public function yangMenentukan()
    {
        return $this->belongsTo(_TenagaAhli::class, 'yang_menentukan', 'kode');
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
