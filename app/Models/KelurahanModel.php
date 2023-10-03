<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelurahanModel extends Model
{
    use HasFactory;
    protected $table = 'T_KELURAHAN';
    protected $fillable = [
        'kode_kelurahan',
        'nama_kelurahan',
        'active',
        'kode_kecamatan'
    ];
}
