<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function data_pengajuan()
    {
        return $this->morphTo(__FUNCTION__, 'data_pengajuan_type', 'data_pengajuan_id');
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id');
    }

    public function pelapor()
    {
        return $this->belongsTo(Pelapor::class, 'id_pelapor', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function statusPengajuan()
    {
        return $this->belongsTo(_StatusPengajuan::class, 'status', 'kode');
    }

    public function pengajuanBerkas()
    {
        return $this->hasMany(PengajuanBerkas::class, 'id_pengajuan', 'id');
    }
}
