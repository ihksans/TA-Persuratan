<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = 'surat_masuk';
    public $timestamps = false;

    protected $fillable = [
        'ID_PENCATATAN',
        'ID_PENGGUNA',
        'ID_KODE_UNIT_KERJA',
        'ID_SIFAT_NASKAH',
        'NOMOR_SURAT',
        'NAMA_PENGIRIM',
        'TGL_DITERIMA',
        'NOMOR_AGENDA',
        ];
}
