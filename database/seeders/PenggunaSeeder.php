<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengguna;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pengguna::create([
        //     // 'NAMA' => 'nadia',
        //     // 'USERNAME' => 'nadia',
        //     // 'ROLE' => '2',
        //     // 'JABATAN' => 'staf arsip',
        //     // 'NIP' => '181511047',
        //     // 'Password' => \Hash::make('nadia123'),
        //     // 'ID_PENGGUNA' => '2'

        //     // 'ID_PENGGUNA' => '1',
        //     'NAMA' => 'admin',
        //     'USERNAME' => 'admin',
        //     'ROLE' => '1',
        //     'JABATAN' => null,
        //     'NIP' => null,
        //     'Password' => \Hash::make('admin123'),
        // ]);
        Pengguna::create([
            'ID_PENGGUNA' => '2',
            'USERNAME' => 'satria',
            'NAMA' => 'satria',
            'ROLE' => '2',
            // 'TOKEN' => 'null',
            'Password' => \Hash::make('satria123'),
            'JABATAN' => null,
            'NIP' => null,
        ]);

    }
}
