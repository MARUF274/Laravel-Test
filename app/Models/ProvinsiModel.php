<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvinsiModel extends Model
{
    use HasFactory;
    protected $table = 'T_PROVINSI';
    protected $fillable = [
        'kode_provinsi',
        'nama_provinsi',
        'active'
    ];
}
