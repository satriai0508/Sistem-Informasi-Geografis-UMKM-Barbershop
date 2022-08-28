<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layanan::create([
            'nama_toko' => 'Alby Barbershop',
            'nama' => 'cepak polos',
            'harga' => '5000000'
        ]);

        Layanan::create([
            'nama_toko' => 'Putri Barbershop',
            'nama' => 'botak 0,5',
            'harga' => '5000000'
        ]);

        Layanan::create([
            'nama_toko' => 'Ikko Barbershop',
            'nama' => 'cukur bulu ketiak beruang',
            'harga' => '50000000'
        ]);
    }
}
