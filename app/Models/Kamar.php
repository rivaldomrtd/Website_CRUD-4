<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = "kamar";
    protected $fillable = [
        'id',
        'id_pasien',
        'id_dokter',
    ];
    public $timestamps = false;
    const UPDATED_AT = null;
}
