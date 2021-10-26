<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPencatatanPeristiwaPentingLainnya extends Model
{
    use HasFactory;

    protected $table = 'data_pencatatan_peristiwa_penting_lainnya';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function pengajuan()
    {
        return $this->morphOne(Pengajuan::class, 'data_pengajuan');
    }
    public function peristiwaPenting()
    {
        return $this->belongsTo(_PeristiwaPenting::class, 'jenis_peristiwa_penting', 'kode');
    }
}
