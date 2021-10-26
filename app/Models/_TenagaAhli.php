<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _TenagaAhli extends Model
{
    use HasFactory;

    protected $table = 'm_tenaga_ahli';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    public $timestamps = false;

    protected $guarded = [];
}
