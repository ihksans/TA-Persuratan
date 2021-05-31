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
            'USERNAME' => 'admin',
            'NAMA' => 'admin',
            'ROLE' => '1',
            'Password' => \Hash::make('admin123'),
        ]);
    }
}
