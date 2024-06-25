<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftarans';  // Nama tabel harus 'pendaftarans' sesuai migrasi

    protected $fillable = ['nama', 'email', 'telepon'];
}
