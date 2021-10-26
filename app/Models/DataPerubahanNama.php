<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPerubahanNama extends Model
{
    use HasFactory;

    protected $table = 'data_perubahan_nama';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function pengajuan()
    {
        return $this->morphOne(Pengajuan::class, 'data_pengajuan');
    }
    public function kewarganegaraanAyah()
    {
        return $this->belongsTo(_Negara::class, 'kewarganegaraan', 'kode');
    }
}
