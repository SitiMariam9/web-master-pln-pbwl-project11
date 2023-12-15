<?php

namespace Database\Seeders;

use App\Models\Golongan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Golongan::create([
            'gol_kode' => 'G01',
            'gol_nama' => 'Tarif Listrik Rumah Tangga',
        ]);
    }
}
