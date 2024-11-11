<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeniTunggal extends Model
{
    use HasFactory;

    protected $table = 'senitunggal';
    protected $fillable = [
        'namaPeserta',
        'tglLahireserta',
        'namaOfficial',
        'noTelpon',
        'instansi',
        'kategori',
        'buktiPembayaran',
        'status'
    ];
}
