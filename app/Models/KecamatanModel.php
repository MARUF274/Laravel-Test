<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KecamatanModel extends Model
{
    use HasFactory;
    protected $table = 'T_KECAMATAN';
    protected $fillable = [
        'kode_kecamatan',
        'nama_kecamatan',
                'active'
    ];
}
