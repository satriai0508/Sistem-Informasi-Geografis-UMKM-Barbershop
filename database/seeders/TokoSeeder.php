<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // isi tokonya disini ikuti contoh
        $jam_buka = '08:00:00';
        $jam_tutup = '22:00:00';

        
        Toko::create([
            'x' => '-0.5750325', // latlang
            'y' => '117.192165', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Nusantara Barbershop',
            'no_hp' => '082122074447',
            'alamat' => 'Jl. Reformasi, Bukuan, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75256'
       
        ]);

        Toko::create([
            'x' => '-0.5756353', // latlang
            'y' => '117.1777153', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Mister Tjoekoer Barbershop',
            'no_hp' => '085348443508',
            'alamat' => 'Jl. Ampera, Rw. Makmur, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75256'
        ]);

        Toko::create([
            'x' => '-0.5649395', //latlang
            'y' => '117.154533', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'PUTRA DAERAH BARBERSHOP',
            'no_hp' => '085231660149',
            'alamat' => 'C5PC+2RF, RW.Rw, Rw. Makmur, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75251'
        ]);
    }
}
