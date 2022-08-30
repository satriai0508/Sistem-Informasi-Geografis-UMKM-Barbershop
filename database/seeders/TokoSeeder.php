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
            'x' => '-0.465523', // latlang
            'y' => '117.172613', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Putri Barbershop',
            'no_hp' => '082122074447',
            'alamat' => 'Jl. Reformasi, Bukuan, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75256'
        ]);

        Toko::create([
            'x' => '-0.462351', //latlang
            'y' => '117.174818', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Ikko Barbershop',
            'no_hp' => '085348555518',
            'alamat' => 'Jl. DI Panjaitan No. 12, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur'
        ]);
    }
}
