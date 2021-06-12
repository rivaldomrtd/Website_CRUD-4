<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = "dokter";
    protected $fillable = [
        'id',
        'nama',
        'jabatan',
    ];
    public $timestamps = false;
    const UPDATED_AT = null;
}
