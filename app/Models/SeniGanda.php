<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeniGanda extends Model
{
    use HasFactory;

    protected $table = 'seniganda';
    protected $fillable = [
        'namaKetua',
        'tglLahirKetua',
        'namaAnggota1',
        'tglLahirAnggota1',
        'namaOfficial',
        'noTelpon',
        'instansi',
        'kategori',
        'buktiPembayaran',
        'status'
    ];
}
