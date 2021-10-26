<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelapor extends Model
{
    use HasFactory;

    protected $table = 'pelapor';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class, 'id_pelapor', 'id');
    }

    public function kewargaNegaraan()
    {
        return $this->belongsTo(_Negara::class, 'kewarganegaraan', 'kode');
    }
}
