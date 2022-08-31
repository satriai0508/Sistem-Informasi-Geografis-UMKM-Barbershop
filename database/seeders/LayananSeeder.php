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
        // isi layanannya disini ikuti contoh
        Layanan::create([
            'nama_toko' => 'Nusantara Barbershop',
            'nama' => 'pangkas rambut',
            'harga' => '20000'
        ]);

        Layanan::create([
            'nama_toko' => 'Mister Tjoekoer Barbershop',
            'nama' => 'pangkas rambut',
            'harga' => '50.000'
        ]);

        Layanan::create([
            'nama_toko' => 'PUTRA DAERAH BARBERSHOP',
            'nama' => 'cukur bulu ketiak beruang',
            'harga' => '50.000'
        ]);
    }
}
