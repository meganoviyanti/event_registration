<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pembeli',
        'kategori_tiket',
        'jumlah',
        'tanggal',
    ];
}
