<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'          => 'Ai Siti Mariam',
            'user_alamat'   => 'Medan',
            'user_hp'       => '085830049377',
            'user_pos'      => '12345',
            'user_role'     => '1',
            'user_aktif'    => '1',
            'email'         => 'admin@gmail.com',
            'password'      => Hash::make('admin'),
        ]);
    }
}
