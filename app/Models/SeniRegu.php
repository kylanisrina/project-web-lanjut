<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeniRegu extends Model
{
    use HasFactory;

    protected $table = 'seniregu';
    protected $fillable = [
        'namaKetua',
        'tglLahirKetua',
        'namaAnggota1',
        'tglLahirAnggota1',
        'namaAnggota2',
        'tglLahirAnggota2',
        'namaOfficial',
        'noTelpon',
        'instansi',
        'kategori',
        'buktiPembayaran',
        'status'
    ];
}
