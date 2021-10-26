<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanBerkas extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_berkas';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class, 'id_pengajuan', 'id');
    }

    public function persyaratan()
    {
        return $this->belongsTo(Persyaratan::class, 'id_persyaratan', 'id');
    }
}
