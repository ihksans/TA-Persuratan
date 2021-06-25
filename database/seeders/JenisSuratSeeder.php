<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JenisSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisSurat::create([
            'JENIS_SURAT' => 'khusus',
            'KETERANGAN' => 'naskah dinas khusus',
        ]);
        JenisSurat::create([
            'JENIS_SURAT' => 'arahan',
            'KETERANGAN' => 'naskah dinas arahan',
        ]);
        JenisSurat::create([
            'JENIS_SURAT' => 'korespondensi',
            'KETERANGAN' => 'naskah dinas korespondensi',
        ]);
    }
}
