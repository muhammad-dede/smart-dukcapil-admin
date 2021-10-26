<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKematian extends Model
{
    use HasFactory;
    protected $table = 'data_kematian';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function pengajuan()
    {
        return $this->morphOne(Pengajuan::class, 'data_pengajuan');
    }
    public function sebabKematian()
    {
        return $this->belongsTo(_SebabKematian::class, 'sebab_kematian', 'kode');
    }
    public function yangMenerangkan()
    {
        return $this->belongsTo(_TenagaAhli::class, 'menerangkan_kematian', 'kode');
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
