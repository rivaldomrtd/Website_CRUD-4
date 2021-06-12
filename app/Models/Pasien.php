<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = "pasien";
    protected $fillable = [
        'id',
        'nama',
        'alamat',
    ];
    public $timestamps = false;
    const UPDATED_AT = null;
}
