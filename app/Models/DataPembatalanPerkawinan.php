<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPembatalanPerkawinan extends Model
{
    use HasFactory;

    protected $table = 'data_pembatalan_perkawinan';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function pengajuan()
    {
        return $this->morphOne(Pengajuan::class, 'data_pengajuan');
    }

    public function statusPerkawinanSebelumKawin()
    {
        return $this->belongsTo(_StatusKawin::class, 'status_perkawinan_sebelum_kawin', 'kode');
    }

    public function agamaKepercayaan()
    {
        return $this->belongsTo(_Agama::class, 'agama_kepercayaan', 'kode');
    }
}
