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
        Pengguna::create([
            'USERNAME' => 'satria',
            'NAMA' => 'satria',
            'ROLE' => '2',
            'Password' => \Hash::make('satria123'),
        ]);
    }
}
