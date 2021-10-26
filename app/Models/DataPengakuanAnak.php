<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengakuanAnak extends Model
{
    use HasFactory;

    protected $table = 'data_pengakuan_anak';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function pengajuan()
    {
        return $this->morphOne(Pengajuan::class, 'data_pengajuan');
    }
    public function kewarganegaraanAyah()
    {
        return $this->belongsTo(_Negara::class, 'kewarganegaraan_ayah', 'kode');
    }

    public function kewarganegaraanIbu()
    {
        return $this->belongsTo(_Negara::class, 'kewarganegaraan_ibu', 'kode');
    }
}
