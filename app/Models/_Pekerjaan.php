<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _Pekerjaan extends Model
{
    use HasFactory;

    protected $table = 'm_pekerjaan';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    public $timestamps = false;

    protected $guarded = [];
}
