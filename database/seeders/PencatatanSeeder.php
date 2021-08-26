<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pencatatan;

class PencatatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUKAKACI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Bantuan pulsa',
        //     'TGL_SURAT'=>'2021-01-01',
        //     'PENANDATANGAN'=>'Sudarmaji'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKACIZ',
        //     'KODE_ARSIP_HLM'=>'1223',
        //     'KODE_ARSIP_MANUAL'=>'TUKAAZ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Bantuan uang tunai dan pemotongan spp',
        //     'TGL_SURAT'=>'2021-01-02',
        //     'PENANDATANGAN'=>'Linda'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKACWI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKWA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan ukt persemester',
        //     'TGL_SURAT'=>'2021-01-03',
        //     'PENANDATANGAN'=>'Agung'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKAQCI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKQA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan biaya konsumsi ppkk',
        //     'TGL_SURAT'=>'2021-01-04',
        //     'PENANDATANGAN'=>'Satria'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKARKACI',
        //     'KODE_ARSIP_HLM'=>'1263',
        //     'KODE_ARSIP_MANUAL'=>'TUKRA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemanjangan kuliah semester genap',
        //     'TGL_SURAT'=>'2021-01-05',
        //     'PENANDATANGAN'=>'Iqbal'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKACIT',
        //     'KODE_ARSIP_HLM'=>'1243',
        //     'KODE_ARSIP_MANUAL'=>'TUKAT',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas kuliah dan yudisium 1 tahap 2',
        //     'TGL_SURAT'=>'2021-01-06',
        //     'PENANDATANGAN'=>'Idris'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'3',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKACVI',
        //     'KODE_ARSIP_HLM'=>'12553',
        //     'KODE_ARSIP_MANUAL'=>'TUKV',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas akhir perkuliah semester ganjil TA 2020/2021',
        //     'TGL_SURAT'=>'2021-01-07',
        //     'PENANDATANGAN'=>'Sueb'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'10',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUKAKAFFCI',
        //     'KODE_ARSIP_HLM'=>'12773',
        //     'KODE_ARSIP_MANUAL'=>'TUKFA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan dana untuk inventaris ormawa',
        //     'TGL_SURAT'=>'2021-01-08',
        //     'PENANDATANGAN'=>'Abdul'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'11',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKRACI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUWEKA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pembatasan penggunaan student center bagi mahasiswa',
        //     'TGL_SURAT'=>'2021-01-09',
        //     'PENANDATANGAN'=>'Marko'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'12',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKACGI',
        //     'KODE_ARSIP_HLM'=>'122223',
        //     'KODE_ARSIP_MANUAL'=>'TUKGA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pengankatan ketua ormawa tahun 2021',
        //     'TGL_SURAT'=>'2021-01-10',
        //     'PENANDATANGAN'=>'Hartono'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'9',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKACIY',
        //     'KODE_ARSIP_HLM'=>'12643',
        //     'KODE_ARSIP_MANUAL'=>'TUKAY',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas akhir pengumpulan kompetisi basilat',
        //     'TGL_SURAT'=>'2021-01-11',
        //     'PENANDATANGAN'=>'Rifa'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'4',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKPACI',
        //     'KODE_ARSIP_HLM'=>'133223',
        //     'KODE_ARSIP_MANUAL'=>'TUKAAS',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas unggah proposal ppkl',
        //     'TGL_SURAT'=>'2021-01-12',
        //     'PENANDATANGAN'=>'Sutarjo'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'5',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUACQWI',
        //     'KODE_ARSIP_HLM'=>'121123',
        //     'KODE_ARSIP_MANUAL'=>'TUKASWA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas pengumpulan karya komperisi pilmapres',
        //     'TGL_SURAT'=>'2021-01-13',
        //     'PENANDATANGAN'=>'Sinta'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'11',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUACWQWI',
        //     'KODE_ARSIP_HLM'=>'1211423',
        //     'KODE_ARSIP_MANUAL'=>'TUKWASWA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pembiayaan kompetisi internasinal',
        //     'TGL_SURAT'=>'2021-01-14',
        //     'PENANDATANGAN'=>'Sudirja'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'7',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUACQZX',
        //     'KODE_ARSIP_HLM'=>'1210023',
        //     'KODE_ARSIP_MANUAL'=>'TUKAZZ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Biaya operasional unit kerja',
        //     'TGL_SURAT'=>'2021-01-15',
        //     'PENANDATANGAN'=>'Perintis'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'4',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUACQWIJ',
        //     'KODE_ARSIP_HLM'=>'121123',
        //     'KODE_ARSIP_MANUAL'=>'TUKASWAJ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Penerimaan mahasiswa baru tahun 2021',
        //     'TGL_SURAT'=>'2021-01-16',
        //     'PENANDATANGAN'=>'Maulana'
        // ]);
        // ///////////////////////
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'11',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUKAYKACI',
        //     'KODE_ARSIP_HLM'=>'1236',
        //     'KODE_ARSIP_MANUAL'=>'TUKYA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Bantuan pulsa',
        //     'TGL_SURAT'=>'2021-01-01',
        //     'PENANDATANGAN'=>'Sudarmaji'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKMIZ',
        //     'KODE_ARSIP_HLM'=>'122366',
        //     'KODE_ARSIP_MANUAL'=>'TUKAAMZ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Bantuan uang tunai dan pemotongan spp 2021',
        //     'TGL_SURAT'=>'2021-01-02',
        //     'PENANDATANGAN'=>'Linda'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKACTWI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKWIA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan ukt persemester 12',
        //     'TGL_SURAT'=>'2021-01-03',
        //     'PENANDATANGAN'=>'Agung M'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAUYCI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUYQA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan biaya konsumsi ppkk tahun 2021',
        //     'TGL_SURAT'=>'2021-01-04',
        //     'PENANDATANGAN'=>'Satria'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKARPPCI',
        //     'KODE_ARSIP_HLM'=>'126367',
        //     'KODE_ARSIP_MANUAL'=>'TUKRPPA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemanjangan kuliah semester genap',
        //     'TGL_SURAT'=>'2021-01-05',
        //     'PENANDATANGAN'=>'Fajrina'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'KAKIKA',
        //     'KODE_ARSIP_HLM'=>'1243',
        //     'KODE_ARSIP_MANUAL'=>'AKIKA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas kuliah dan yudisium 2 tahap 2',
        //     'TGL_SURAT'=>'2021-01-06',
        //     'PENANDATANGAN'=>'RIDWAN'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'3',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'JAHIMA',
        //     'KODE_ARSIP_HLM'=>'12553',
        //     'KODE_ARSIP_MANUAL'=>'KLMK',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas akhir perkuliah semester ganjil TA 2021/2022',
        //     'TGL_SURAT'=>'2021-01-07',
        //     'PENANDATANGAN'=>'SODIKIN'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'10',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'ASDQWE',
        //     'KODE_ARSIP_HLM'=>'12773',
        //     'KODE_ARSIP_MANUAL'=>'ASDQWE',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan dana untuk inventaris ukm ',
        //     'TGL_SURAT'=>'2021-01-08',
        //     'PENANDATANGAN'=>'UJANG'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'11',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKRACI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUWEKA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pembatasan penggunaan sekre',
        //     'TGL_SURAT'=>'2021-01-09',
        //     'PENANDATANGAN'=>'Marko'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'12',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKPOACGI',
        //     'KODE_ARSIP_HLM'=>'122913',
        //     'KODE_ARSIP_MANUAL'=>'TUKGA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pengankatan ketua ormawa tahun 2020',
        //     'TGL_SURAT'=>'2021-01-10',
        //     'PENANDATANGAN'=>'SUdirja'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'9',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKACIY',
        //     'KODE_ARSIP_HLM'=>'12643',
        //     'KODE_ARSIP_MANUAL'=>'TUKAY',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas akhir pengumpulan kompetisi basat',
        //     'TGL_SURAT'=>'2021-01-11',
        //     'PENANDATANGAN'=>'Rifadi'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'4',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKALOCI',
        //     'KODE_ARSIP_HLM'=>'133223',
        //     'KODE_ARSIP_MANUAL'=>'TUKOAS',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas unggah proposal KLMI',
        //     'TGL_SURAT'=>'2021-01-12',
        //     'PENANDATANGAN'=>'Sudikro'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'5',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUACQWI',
        //     'KODE_ARSIP_HLM'=>'121123',
        //     'KODE_ARSIP_MANUAL'=>'TUKASWA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas pengumpulan karya komperisi',
        //     'TGL_SURAT'=>'2021-01-13',
        //     'PENANDATANGAN'=>'Sinjari'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'11',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'KURAMA',
        //     'KODE_ARSIP_HLM'=>'112211',
        //     'KODE_ARSIP_MANUAL'=>'KURAMA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pembiayaan kompetisi nasional',
        //     'TGL_SURAT'=>'2021-01-14',
        //     'PENANDATANGAN'=>'Sudirja'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'7',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUACQZX',
        //     'KODE_ARSIP_HLM'=>'1210023',
        //     'KODE_ARSIP_MANUAL'=>'TUKAZZ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Biaya operasional unit kerja',
        //     'TGL_SURAT'=>'2021-01-15',
        //     'PENANDATANGAN'=>'Perintis'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'4',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUACQWIJ',
        //     'KODE_ARSIP_HLM'=>'121123',
        //     'KODE_ARSIP_MANUAL'=>'TUKASWAJ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Penerimaan mahasiswa baru tahun 2021',
        //     'TGL_SURAT'=>'2021-01-16',
        //     'PENANDATANGAN'=>'Maulana'
        // ]);
        // //////////////////////////////
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'15',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'SAKUI',
        //     'KODE_ARSIP_HLM'=>'1266553',
        //     'KODE_ARSIP_MANUAL'=>'KURADI',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Bantuan internet',
        //     'TGL_SURAT'=>'2021-01-01',
        //     'PENANDATANGAN'=>'Sudarmaji'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKACIZ',
        //     'KODE_ARSIP_HLM'=>'1223',
        //     'KODE_ARSIP_MANUAL'=>'TUKAAZ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Bantuan uang tunai dan pemotongan biaya TA',
        //     'TGL_SURAT'=>'2021-01-02',
        //     'PENANDATANGAN'=>'Linda'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'12',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKASA',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKWPOA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan ukt persemester TA 2021',
        //     'TGL_SURAT'=>'2021-01-03',
        //     'PENANDATANGAN'=>'Agung'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKARCI',
        //     'KODE_ARSIP_HLM'=>'124423',
        //     'KODE_ARSIP_MANUAL'=>'TUKRQA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan biaya konsumsi lkmm',
        //     'TGL_SURAT'=>'2021-01-04',
        //     'PENANDATANGAN'=>'Satria'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'ASGAR',
        //     'KODE_ARSIP_HLM'=>'1263',
        //     'KODE_ARSIP_MANUAL'=>'TUKRSA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemanjangan kuliah semester ganjil 2021',
        //     'TGL_SURAT'=>'2021-01-05',
        //     'PENANDATANGAN'=>'Iqbal'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'10',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKACIT',
        //     'KODE_ARSIP_HLM'=>'124376',
        //     'KODE_ARSIP_MANUAL'=>'TUKABT',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas kuliah tahap 2',
        //     'TGL_SURAT'=>'2021-01-06',
        //     'PENANDATANGAN'=>'Idris'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'3',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKZAVI',
        //     'KODE_ARSIP_HLM'=>'12553',
        //     'KODE_ARSIP_MANUAL'=>'TUKZAV',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas akhir perkuliah semester genap 2021',
        //     'TGL_SURAT'=>'2021-01-07',
        //     'PENANDATANGAN'=>'Sueb'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'10',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUKAKDSFCI',
        //     'KODE_ARSIP_HLM'=>'12773',
        //     'KODE_ARSIP_MANUAL'=>'TUKFA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan dana untuk inventaris unit kerja',
        //     'TGL_SURAT'=>'2021-01-08',
        //     'PENANDATANGAN'=>'Abdul'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'17',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAQQACI',
        //     'KODE_ARSIP_HLM'=>'18823',
        //     'KODE_ARSIP_MANUAL'=>'TUWEQQKA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pembatasan penggunaan student center bagi alumni',
        //     'TGL_SURAT'=>'2021-01-09',
        //     'PENANDATANGAN'=>'Marko'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'12',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKUIACGI',
        //     'KODE_ARSIP_HLM'=>'1222773',
        //     'KODE_ARSIP_MANUAL'=>'TUKIGA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pengankatan ketua orda tahun 2021',
        //     'TGL_SURAT'=>'2021-01-10',
        //     'PENANDATANGAN'=>'Hartono'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'9',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAWWCIY',
        //     'KODE_ARSIP_HLM'=>'12643',
        //     'KODE_ARSIP_MANUAL'=>'TUWWKAY',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas akhir pengumpulan kompetisi posdiklat',
        //     'TGL_SURAT'=>'2021-01-11',
        //     'PENANDATANGAN'=>'Rifa'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'6',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'PANKA',
        //     'KODE_ARSIP_HLM'=>'133913',
        //     'KODE_ARSIP_MANUAL'=>'TUNTA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas unggah proposal pkm',
        //     'TGL_SURAT'=>'2021-01-12',
        //     'PENANDATANGAN'=>'Sutarjo'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'5',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'SUSAJI',
        //     'KODE_ARSIP_HLM'=>'121003',
        //     'KODE_ARSIP_MANUAL'=>'TUKASWWA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas pengumpulan karya irwsn',
        //     'TGL_SURAT'=>'2021-01-13',
        //     'PENANDATANGAN'=>'Sinta'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'11',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUACWQWI',
        //     'KODE_ARSIP_HLM'=>'1211423',
        //     'KODE_ARSIP_MANUAL'=>'TUKWASWA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pembiayaan kompetisi internasinal',
        //     'TGL_SURAT'=>'2021-01-14',
        //     'PENANDATANGAN'=>'Sudirja'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'7',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUACQZX',
        //     'KODE_ARSIP_HLM'=>'1210023',
        //     'KODE_ARSIP_MANUAL'=>'TUKAZZ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Biaya operasional unit kerja dinas',
        //     'TGL_SURAT'=>'2021-01-15',
        //     'PENANDATANGAN'=>'Perintis'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'4',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUAWIJ',
        //     'KODE_ARSIP_HLM'=>'1123',
        //     'KODE_ARSIP_MANUAL'=>'TUWAJ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Vidio jurusan',
        //     'TGL_SURAT'=>'2021-01-16',
        //     'PENANDATANGAN'=>'Maulana'
        // ]);
        // ////////////////////////////////////
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'11',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUKAKACI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Bantuan pulsa tingkat akhir',
        //     'TGL_SURAT'=>'2021-01-01',
        //     'PENANDATANGAN'=>'Sudarmaji'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKACIZ',
        //     'KODE_ARSIP_HLM'=>'1223',
        //     'KODE_ARSIP_MANUAL'=>'TUKAAZ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Undangan rapat',
        //     'TGL_SURAT'=>'2021-01-02',
        //     'PENANDATANGAN'=>'Linda'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKACWI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKWA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan ukt ',
        //     'TGL_SURAT'=>'2021-01-03',
        //     'PENANDATANGAN'=>'Agung'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKACI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKJJQA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan biaya pusdikhub',
        //     'TGL_SURAT'=>'2021-01-04',
        //     'PENANDATANGAN'=>'Satria'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUKAKACI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Bantuan pulsa',
        //     'TGL_SURAT'=>'2021-01-01',
        //     'PENANDATANGAN'=>'Sudarmaji'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKACIZ',
        //     'KODE_ARSIP_HLM'=>'1223',
        //     'KODE_ARSIP_MANUAL'=>'TUKAAZ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Bantuan uang tunai dan pemotongan spp',
        //     'TGL_SURAT'=>'2021-01-02',
        //     'PENANDATANGAN'=>'Linda'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKACWI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKWA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan ukt persemester',
        //     'TGL_SURAT'=>'2021-01-03',
        //     'PENANDATANGAN'=>'Agung'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKAQCI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKQA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan biaya konsumsi ppkk',
        //     'TGL_SURAT'=>'2021-01-04',
        //     'PENANDATANGAN'=>'Satria'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKARKACI',
        //     'KODE_ARSIP_HLM'=>'1263',
        //     'KODE_ARSIP_MANUAL'=>'TUKRA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemanjangan kuliah semester genap',
        //     'TGL_SURAT'=>'2021-01-05',
        //     'PENANDATANGAN'=>'Iqbal'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKACIT',
        //     'KODE_ARSIP_HLM'=>'1243',
        //     'KODE_ARSIP_MANUAL'=>'TUKAT',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas kuliah dan yudisium 1 tahap 2',
        //     'TGL_SURAT'=>'2021-01-06',
        //     'PENANDATANGAN'=>'Idris'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'3',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKACVI',
        //     'KODE_ARSIP_HLM'=>'12553',
        //     'KODE_ARSIP_MANUAL'=>'TUKV',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas akhir perkuliah semester ganjil TA 2020/2021',
        //     'TGL_SURAT'=>'2021-01-07',
        //     'PENANDATANGAN'=>'Sueb'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'10',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUKAKAFFCI',
        //     'KODE_ARSIP_HLM'=>'12773',
        //     'KODE_ARSIP_MANUAL'=>'TUKFA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan dana untuk inventaris ormawa',
        //     'TGL_SURAT'=>'2021-01-08',
        //     'PENANDATANGAN'=>'Abdul'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'11',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKRACI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUWEKA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pembatasan penggunaan student center bagi mahasiswa',
        //     'TGL_SURAT'=>'2021-01-09',
        //     'PENANDATANGAN'=>'Marko'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'12',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKACGI',
        //     'KODE_ARSIP_HLM'=>'122223',
        //     'KODE_ARSIP_MANUAL'=>'TUKGA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pengankatan ketua ormawa tahun 2021',
        //     'TGL_SURAT'=>'2021-01-10',
        //     'PENANDATANGAN'=>'Hartono'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'9',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKACIY',
        //     'KODE_ARSIP_HLM'=>'12643',
        //     'KODE_ARSIP_MANUAL'=>'TUKAY',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas akhir pengumpulan kompetisi basilat',
        //     'TGL_SURAT'=>'2021-01-11',
        //     'PENANDATANGAN'=>'Rifa'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'4',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKPACI',
        //     'KODE_ARSIP_HLM'=>'133223',
        //     'KODE_ARSIP_MANUAL'=>'TUKAAS',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas unggah proposal ppkl',
        //     'TGL_SURAT'=>'2021-01-12',
        //     'PENANDATANGAN'=>'Sutarjo'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'5',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUACQWI',
        //     'KODE_ARSIP_HLM'=>'121123',
        //     'KODE_ARSIP_MANUAL'=>'TUKASWA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas pengumpulan karya komperisi pilmapres',
        //     'TGL_SURAT'=>'2021-01-13',
        //     'PENANDATANGAN'=>'Sinta'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'11',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUACWQWI',
        //     'KODE_ARSIP_HLM'=>'1211423',
        //     'KODE_ARSIP_MANUAL'=>'TUKWASWA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pembiayaan kompetisi internasinal',
        //     'TGL_SURAT'=>'2021-01-14',
        //     'PENANDATANGAN'=>'Sudirja'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'7',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUACQZX',
        //     'KODE_ARSIP_HLM'=>'1210023',
        //     'KODE_ARSIP_MANUAL'=>'TUKAZZ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Biaya operasional unit kerja',
        //     'TGL_SURAT'=>'2021-01-15',
        //     'PENANDATANGAN'=>'Perintis'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'4',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUACQWIJ',
        //     'KODE_ARSIP_HLM'=>'121123',
        //     'KODE_ARSIP_MANUAL'=>'TUKASWAJ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Penerimaan mahasiswa baru tahun 2021',
        //     'TGL_SURAT'=>'2021-01-16',
        //     'PENANDATANGAN'=>'Maulana'
        // ]);
        // ///////////////////////
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'11',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUKAYKACI',
        //     'KODE_ARSIP_HLM'=>'1236',
        //     'KODE_ARSIP_MANUAL'=>'TUKYA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Bantuan pulsa',
        //     'TGL_SURAT'=>'2021-01-01',
        //     'PENANDATANGAN'=>'Sudarmaji'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKMIZ',
        //     'KODE_ARSIP_HLM'=>'122366',
        //     'KODE_ARSIP_MANUAL'=>'TUKAAMZ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Bantuan uang tunai dan pemotongan spp 2021',
        //     'TGL_SURAT'=>'2021-01-02',
        //     'PENANDATANGAN'=>'Linda'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKACTWI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKWIA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan ukt persemester 12',
        //     'TGL_SURAT'=>'2021-01-03',
        //     'PENANDATANGAN'=>'Agung M'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAUYCI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUYQA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan biaya konsumsi ppkk tahun 2021',
        //     'TGL_SURAT'=>'2021-01-04',
        //     'PENANDATANGAN'=>'Satria'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKARPPCI',
        //     'KODE_ARSIP_HLM'=>'126367',
        //     'KODE_ARSIP_MANUAL'=>'TUKRPPA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemanjangan kuliah semester genap',
        //     'TGL_SURAT'=>'2021-01-05',
        //     'PENANDATANGAN'=>'Fajrina'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'KAKIKA',
        //     'KODE_ARSIP_HLM'=>'1243',
        //     'KODE_ARSIP_MANUAL'=>'AKIKA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas kuliah dan yudisium 2 tahap 2',
        //     'TGL_SURAT'=>'2021-01-06',
        //     'PENANDATANGAN'=>'RIDWAN'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'3',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'JAHIMA',
        //     'KODE_ARSIP_HLM'=>'12553',
        //     'KODE_ARSIP_MANUAL'=>'KLMK',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas akhir perkuliah semester ganjil TA 2021/2022',
        //     'TGL_SURAT'=>'2021-01-07',
        //     'PENANDATANGAN'=>'SODIKIN'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'10',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'ASDQWE',
        //     'KODE_ARSIP_HLM'=>'12773',
        //     'KODE_ARSIP_MANUAL'=>'ASDQWE',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan dana untuk inventaris ukm ',
        //     'TGL_SURAT'=>'2021-01-08',
        //     'PENANDATANGAN'=>'UJANG'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'11',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKRACI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUWEKA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pembatasan penggunaan sekre',
        //     'TGL_SURAT'=>'2021-01-09',
        //     'PENANDATANGAN'=>'Marko'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'12',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKPOACGI',
        //     'KODE_ARSIP_HLM'=>'122913',
        //     'KODE_ARSIP_MANUAL'=>'TUKGA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pengankatan ketua ormawa tahun 2020',
        //     'TGL_SURAT'=>'2021-01-10',
        //     'PENANDATANGAN'=>'SUdirja'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'9',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKACIY',
        //     'KODE_ARSIP_HLM'=>'12643',
        //     'KODE_ARSIP_MANUAL'=>'TUKAY',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas akhir pengumpulan kompetisi basat',
        //     'TGL_SURAT'=>'2021-01-11',
        //     'PENANDATANGAN'=>'Rifadi'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'4',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKALOCI',
        //     'KODE_ARSIP_HLM'=>'133223',
        //     'KODE_ARSIP_MANUAL'=>'TUKOAS',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas unggah proposal KLMI',
        //     'TGL_SURAT'=>'2021-01-12',
        //     'PENANDATANGAN'=>'Sudikro'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'5',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUACQWI',
        //     'KODE_ARSIP_HLM'=>'121123',
        //     'KODE_ARSIP_MANUAL'=>'TUKASWA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas pengumpulan karya komperisi',
        //     'TGL_SURAT'=>'2021-01-13',
        //     'PENANDATANGAN'=>'Sinjari'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'11',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'KURAMA',
        //     'KODE_ARSIP_HLM'=>'112211',
        //     'KODE_ARSIP_MANUAL'=>'KURAMA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pembiayaan kompetisi nasional',
        //     'TGL_SURAT'=>'2021-01-14',
        //     'PENANDATANGAN'=>'Sudirja'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'7',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUACQZX',
        //     'KODE_ARSIP_HLM'=>'1210023',
        //     'KODE_ARSIP_MANUAL'=>'TUKAZZ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Biaya operasional unit kerja',
        //     'TGL_SURAT'=>'2021-01-15',
        //     'PENANDATANGAN'=>'Perintis'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'4',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUACQWIJ',
        //     'KODE_ARSIP_HLM'=>'121123',
        //     'KODE_ARSIP_MANUAL'=>'TUKASWAJ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Penerimaan mahasiswa baru tahun 2021',
        //     'TGL_SURAT'=>'2021-01-16',
        //     'PENANDATANGAN'=>'Maulana'
        // ]);
        // //////////////////////////////
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'15',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'SAKUI',
        //     'KODE_ARSIP_HLM'=>'1266553',
        //     'KODE_ARSIP_MANUAL'=>'KURADI',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Bantuan internet',
        //     'TGL_SURAT'=>'2021-01-01',
        //     'PENANDATANGAN'=>'Sudarmaji'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKACIZ',
        //     'KODE_ARSIP_HLM'=>'1223',
        //     'KODE_ARSIP_MANUAL'=>'TUKAAZ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Bantuan uang tunai dan pemotongan biaya TA',
        //     'TGL_SURAT'=>'2021-01-02',
        //     'PENANDATANGAN'=>'Linda'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'12',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKASA',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKWPOA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan ukt persemester TA 2021',
        //     'TGL_SURAT'=>'2021-01-03',
        //     'PENANDATANGAN'=>'Agung'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKARCI',
        //     'KODE_ARSIP_HLM'=>'124423',
        //     'KODE_ARSIP_MANUAL'=>'TUKRQA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan biaya konsumsi lkmm',
        //     'TGL_SURAT'=>'2021-01-04',
        //     'PENANDATANGAN'=>'Satria'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'ASGAR',
        //     'KODE_ARSIP_HLM'=>'1263',
        //     'KODE_ARSIP_MANUAL'=>'TUKRSA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemanjangan kuliah semester ganjil 2021',
        //     'TGL_SURAT'=>'2021-01-05',
        //     'PENANDATANGAN'=>'Iqbal'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'10',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKACIT',
        //     'KODE_ARSIP_HLM'=>'124376',
        //     'KODE_ARSIP_MANUAL'=>'TUKABT',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas kuliah tahap 2',
        //     'TGL_SURAT'=>'2021-01-06',
        //     'PENANDATANGAN'=>'Idris'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'3',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKZAVI',
        //     'KODE_ARSIP_HLM'=>'12553',
        //     'KODE_ARSIP_MANUAL'=>'TUKZAV',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas akhir perkuliah semester genap 2021',
        //     'TGL_SURAT'=>'2021-01-07',
        //     'PENANDATANGAN'=>'Sueb'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'10',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUKAKDSFCI',
        //     'KODE_ARSIP_HLM'=>'12773',
        //     'KODE_ARSIP_MANUAL'=>'TUKFA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan dana untuk inventaris unit kerja',
        //     'TGL_SURAT'=>'2021-01-08',
        //     'PENANDATANGAN'=>'Abdul'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'17',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAQQACI',
        //     'KODE_ARSIP_HLM'=>'18823',
        //     'KODE_ARSIP_MANUAL'=>'TUWEQQKA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pembatasan penggunaan student center bagi alumni',
        //     'TGL_SURAT'=>'2021-01-09',
        //     'PENANDATANGAN'=>'Marko'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'12',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKUIACGI',
        //     'KODE_ARSIP_HLM'=>'1222773',
        //     'KODE_ARSIP_MANUAL'=>'TUKIGA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pengankatan ketua orda tahun 2021',
        //     'TGL_SURAT'=>'2021-01-10',
        //     'PENANDATANGAN'=>'Hartono'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'9',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAWWCIY',
        //     'KODE_ARSIP_HLM'=>'12643',
        //     'KODE_ARSIP_MANUAL'=>'TUWWKAY',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas akhir pengumpulan kompetisi posdiklat',
        //     'TGL_SURAT'=>'2021-01-11',
        //     'PENANDATANGAN'=>'Rifa'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'6',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'PANKA',
        //     'KODE_ARSIP_HLM'=>'133913',
        //     'KODE_ARSIP_MANUAL'=>'TUNTA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas unggah proposal pkm',
        //     'TGL_SURAT'=>'2021-01-12',
        //     'PENANDATANGAN'=>'Sutarjo'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'5',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'SUSAJI',
        //     'KODE_ARSIP_HLM'=>'121003',
        //     'KODE_ARSIP_MANUAL'=>'TUKASWWA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Batas pengumpulan karya irwsn',
        //     'TGL_SURAT'=>'2021-01-13',
        //     'PENANDATANGAN'=>'Sinta'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'11',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUACWQWI',
        //     'KODE_ARSIP_HLM'=>'1211423',
        //     'KODE_ARSIP_MANUAL'=>'TUKWASWA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pembiayaan kompetisi internasinal',
        //     'TGL_SURAT'=>'2021-01-14',
        //     'PENANDATANGAN'=>'Sudirja'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'7',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUACQZX',
        //     'KODE_ARSIP_HLM'=>'1210023',
        //     'KODE_ARSIP_MANUAL'=>'TUKAZZ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Biaya operasional unit kerja dinas',
        //     'TGL_SURAT'=>'2021-01-15',
        //     'PENANDATANGAN'=>'Perintis'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'4',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUAWIJ',
        //     'KODE_ARSIP_HLM'=>'1123',
        //     'KODE_ARSIP_MANUAL'=>'TUWAJ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Vidio jurusan',
        //     'TGL_SURAT'=>'2021-01-16',
        //     'PENANDATANGAN'=>'Maulana'
        // ]);
        // ////////////////////////////////////
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'11',
        //     'ID_DERAJAT_SURAT'=>'2',
        //     'KODE_ARSIP_KOM'=>'TUKAKACI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Bantuan pulsa tingkat akhir',
        //     'TGL_SURAT'=>'2021-01-01',
        //     'PENANDATANGAN'=>'Sudarmaji'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'3',
        //     'KODE_ARSIP_KOM'=>'TUKAKACIZ',
        //     'KODE_ARSIP_HLM'=>'1223',
        //     'KODE_ARSIP_MANUAL'=>'TUKAAZ',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Undangan rapat',
        //     'TGL_SURAT'=>'2021-01-02',
        //     'PENANDATANGAN'=>'Linda'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'2',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKAKACWI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKWA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan ukt ',
        //     'TGL_SURAT'=>'2021-01-03',
        //     'PENANDATANGAN'=>'Agung'
        // ]);
        // Pencatatan::create([
        //     'ID_PENGGUNA'=>'2',
        //     'ID_JENIS_SURAT'=>'1',
        //     'ID_DERAJAT_SURAT'=>'1',
        //     'KODE_ARSIP_KOM'=>'TUKACI',
        //     'KODE_ARSIP_HLM'=>'123',
        //     'KODE_ARSIP_MANUAL'=>'TUKJJQA',
        //     'NAMA_FILE_SURAT'=>null,
        //     'NAMA_FILE_LAMPIRAN'=>null,
        //     'PERIHAL'=>'Pemotongan biaya pusdikhub',
        //     'TGL_SURAT'=>'2021-01-04',
        //     'PENANDATANGAN'=>'Satria'
        // ]);
       // +- 150 data
      // Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>24,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1146','KODE_ARSIP_MANUAL'=>'KMKMKM.1146','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Surat Edaran Anti Narkotika mahasiswa','TGL_SURAT'=>'2021-03-24','PENANDATANGAN'=>'Aas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>1,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1123','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1123','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa semester gantil TA 2020/2021','TGL_SURAT'=>'2021-03-01','PENANDATANGAN'=>'Sukadi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>2,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1124','KODE_ARSIP_MANUAL'=>'MKKMCIA.1124','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Beasiswa djarum','TGL_SURAT'=>'2021-03-02','PENANDATANGAN'=>'Herman']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>3,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1125','KODE_ARSIP_MANUAL'=>'CIATKKM.1125','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Biaya operasional unit kerja','TGL_SURAT'=>'2021-03-03','PENANDATANGAN'=>'Ihksan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>4,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1126','KODE_ARSIP_MANUAL'=>'KMKMKM.1126','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan gedung','TGL_SURAT'=>'2021-03-04','PENANDATANGAN'=>'Siti']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>5,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1127','KODE_ARSIP_MANUAL'=>'MEKACEKA.1127','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar proposal','TGL_SURAT'=>'2021-03-05','PENANDATANGAN'=>'Agung']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>6,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1128','KODE_ARSIP_MANUAL'=>'MEKADEKA.1128','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kompetisi jabar','TGL_SURAT'=>'2021-03-06','PENANDATANGAN'=>'Maulana']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>7,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1129','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1129','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan kuliah tamu','TGL_SURAT'=>'2021-03-07','PENANDATANGAN'=>'Ridwan']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>8,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1130','KODE_ARSIP_MANUAL'=>'CIACIACIA.1130','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar dikti','TGL_SURAT'=>'2021-03-08','PENANDATANGAN'=>'Iqbal']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>9,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1131','KODE_ARSIP_MANUAL'=>'MOKACIA.1131','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jam kerja ppkmm ','TGL_SURAT'=>'2021-03-09','PENANDATANGAN'=>'Eki']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>10,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1132','KODE_ARSIP_MANUAL'=>'MOKCAIA.1132','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah proposal pkm dikti','TGL_SURAT'=>'2021-03-10','PENANDATANGAN'=>'Salsa']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>11,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1133','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1133','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Batas akhir unggah pengajuan peserta kompetisi jabar','TGL_SURAT'=>'2021-03-11','PENANDATANGAN'=>'Alya']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>12,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1134','KODE_ARSIP_MANUAL'=>'MKKMCIA.1134','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengangkatan unit kerja','TGL_SURAT'=>'2021-03-12','PENANDATANGAN'=>'Rindu']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>13,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1135','KODE_ARSIP_MANUAL'=>'CIATKKM.1135','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan batas jam kerja masa pandemi','TGL_SURAT'=>'2021-03-13','PENANDATANGAN'=>'Rendi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>14,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'KMKMKM','KODE_ARSIP_HLM'=>'1136','KODE_ARSIP_MANUAL'=>'KMKMKM.1136','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan tanggal masa studi ','TGL_SURAT'=>'2021-03-14','PENANDATANGAN'=>'Kamil']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>15,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'MEKACEKA','KODE_ARSIP_HLM'=>'1137','KODE_ARSIP_MANUAL'=>'MEKACEKA.1137','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan waktu ppkk mahasiswa baru','TGL_SURAT'=>'2021-03-15','PENANDATANGAN'=>'Abdilah']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>16,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MEKADEKA','KODE_ARSIP_HLM'=>'1138','KODE_ARSIP_MANUAL'=>'MEKADEKA.1138','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan seminar narkotika','TGL_SURAT'=>'2021-03-16','PENANDATANGAN'=>'Fahmi']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>17,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'TUKAZKIA','KODE_ARSIP_HLM'=>'1139','KODE_ARSIP_MANUAL'=>'TUKAZKIA.1139','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Undangan pelatihan mahasiswa bela negara','TGL_SURAT'=>'2021-03-17','PENANDATANGAN'=>'Idris']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>18,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'CIACIACIA','KODE_ARSIP_HLM'=>'1140','KODE_ARSIP_MANUAL'=>'CIACIACIA.1140','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal kerja BEM','TGL_SURAT'=>'2021-03-18','PENANDATANGAN'=>'Masitoh']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>19,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MOKACIA','KODE_ARSIP_HLM'=>'1141','KODE_ARSIP_MANUAL'=>'MOKACIA.1141','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan proposal ormawa','TGL_SURAT'=>'2021-03-19','PENANDATANGAN'=>'Jaeludin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>20,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'MOKCAIA','KODE_ARSIP_HLM'=>'1142','KODE_ARSIP_MANUAL'=>'MOKCAIA.1142','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan ketua ormawa','TGL_SURAT'=>'2021-03-20','PENANDATANGAN'=>'Dimas']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>21,'ID_DERAJAT_SURAT'=>3,'KODE_ARSIP_KOM'=>'TUKAKCIA','KODE_ARSIP_HLM'=>'1143','KODE_ARSIP_MANUAL'=>'TUKAKCIA.1143','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Perubahan jadwal penggunaan pendopo','TGL_SURAT'=>'2021-03-21','PENANDATANGAN'=>'Ahmad']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>22,'ID_DERAJAT_SURAT'=>1,'KODE_ARSIP_KOM'=>'MKKMCIA','KODE_ARSIP_HLM'=>'1144','KODE_ARSIP_MANUAL'=>'MKKMCIA.1144','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan biaya kerja uks','TGL_SURAT'=>'2021-03-22','PENANDATANGAN'=>'Yamin']);
      Pencatatan::create(['ID_PENGGUNA'=>2, 'ID_JENIS_SURAT'=>23,'ID_DERAJAT_SURAT'=>2,'KODE_ARSIP_KOM'=>'CIATKKM','KODE_ARSIP_HLM'=>'1145','KODE_ARSIP_MANUAL'=>'CIATKKM.1145','NAMA_FILE_SURAT'=>null,'NAMA_FILE_LAMPIRAN'=>null,'PERIHAL'=>'Pengajuan sewa gedung','TGL_SURAT'=>'2021-03-23','PENANDATANGAN'=>'Didin']);
    
    }
       
}
