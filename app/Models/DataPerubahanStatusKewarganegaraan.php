<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPerubahanStatusKewarganegaraan extends Model
{
    use HasFactory;
    protected $table = 'data_perubahan_status_kewarganegaraan';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function pengajuan()
    {
        return $this->morphOne(Pengajuan::class, 'data_pengajuan');
    }
}
