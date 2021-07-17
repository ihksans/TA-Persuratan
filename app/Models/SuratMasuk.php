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
        'ID_JENIS_SURAT',
        'ID_DERAJAT_SURAT',
        'KODE_ARSIP_KOM',
        'KODE_ARSIP_HLM',
        'KODE_ARSIP_MANUAL',
        'NAMA_FILE_SURAT',
        'NAMA_FILE_LAMPIRAN',
        'NOMOR_SURAT',
        'NAMA_PENGIRIM',
        'TUJUAN_SURAT',
        'PERIHAL',
        'TGL_DITERIMA',
        'TGL_SURAT',
        'PENANDATANGAN',
        'NOMOR_AGENDA',
        'ID_KODE_UNIT_KERJA',
        'ID_SIFAT_NASKAH'
        ];
}
