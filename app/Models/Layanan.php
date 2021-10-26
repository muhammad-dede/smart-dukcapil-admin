<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function persyaratan()
    {
        return $this->hasMany(Persyaratan::class, 'id_layanan', 'id');
    }

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class, 'id_layanan', 'id');
    }
}
