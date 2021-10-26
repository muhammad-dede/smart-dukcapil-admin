<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _Agama extends Model
{
    use HasFactory;

    protected $table = 'm_agama';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    public $timestamps = false;

    protected $guarded = [];
}
