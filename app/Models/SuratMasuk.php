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

    function getSuratMasuk(){
        $suratMasuk = DB::table('surat_masuk')
        ->join('kode_unit_kerja','surat_masuk.ID_KODE_UNIT_KERJA','=','kode_unit_kerja.ID_KODE_UNIT_KERJA')
        ->join('pencatatan','surat_masuk.ID_PENCATATAN','=','pencatatan.ID_PENCATATAN')
        ->join('pengguna','surat_masuk.ID_PENGGUNA','=','pengguna.ID_PENGGUNA')
        ->select('surat_masuk.NOMOR_AGENDA','surat_masuk.TGL_SURAT','surat_masuk.TGL_DITERIMA','surat_masuk.NOMOR_SURAT','surat_masuk.PERIHAL',
        'surat_masuk.TUJUAN_SURAT','surat_masuk.PENANDATANGAN','surat_masuk.NAMA_PENGIRIM','kode_unit_kerja.NAMA_UNIT_KERJA','pencatatan.KODE_ARSIP_KOM',
        'pencatatan.KODE_ARSIP_HLM','pencatatan.KODE_ARSIP_MANUAL','pengguna.NAMA')
        ->get();
        return $suratMasuk;
    }
}
