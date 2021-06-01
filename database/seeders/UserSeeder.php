<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '7',
            'username' => 'satria',
            'name' => 'satria',
            'password' => \Hash::make('satria123'),
        ]);
    }
}
