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
        $hari_buka = 'Senin';
        $hari_tutup = 'Minggu';

        Toko::create([
            'x' => '-0.5751417822586963', // latlang
            'y' => '117.20111849148634', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Nusantara Barbershop',
            'pemilik' => 'Rian Hidayat',
            'no_hp' => '082122074447',
            'alamat' => 'Jl. Reformasi, Bukuan, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75256'
        ]);

        Toko::create([
            'x' => '-0.57522761275546', // latlang
            'y' => '117.18893051147      ', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Mister Tjoekoer Barbershop',
            'pemilik' => 'Nurhuda Pasuryan',
            'no_hp' => '085348443508',
            'alamat' => 'Jl. Ampera, Rw. Makmur, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75256'
        ]);

        Toko::create([
            'x' => '-0.56498204950855', //latlang
            'y' => '117.17216152426', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'PUTRA DAERAH BARBERSHOP',
            'pemilik' => 'Nopyanto',
            'no_hp' => '085231660149',
            'alamat' => 'C5PC+2RF, RW.Rw, Rw. Makmur, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75251'
        ]);


        Toko::create([
            'x' => '-0.56442421105684', //latlang
            'y' => '117.17200026841', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Yoga BARBERSHOP',
            'pemilik' => 'Yoga',
            'no_hp' => '0821369903809',
            'alamat' => 'Jl. Trikora No.RT 08, Rw. Makmur, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.56431692480114', //latlang
            'y' => '117.1714102471', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'M&J BARBERSHOP',
            'pemilik' => 'Rory Januari',
            'no_hp' => '081351764470',
            'alamat' => 'Jl. Trikora No.27, Rw. Makmur, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75251'
        ]);

        Toko::create([
            'x' => '-0.56291153370456', //latlang
            'y' => '117.17034764459', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Ponixcut BARBERSHOP',
            'pemilik' => 'Asnawi',
            'no_hp' => '082325283474',
            'alamat' => 'Jl. Ampera, Rw. Makmur, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75251'
        ]);

        Toko::create([
            'x' => '-0.51429029260049', //latlang
            'y' => '117.14893336615', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Eghe BARBERSHOP',
            'pemilik' => 'Aldiansyah',
            'no_hp' => '085246855833',
            'alamat' => 'F5P2+R34, Mesjid, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.5250404300272756', //latlang
            'y' => '117.13675616224991', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Bark BARBERSHOP',
            'pemilik' => 'firman',
            'no_hp' => '082157996011',
            'alamat' => 'JL.Harun Nafsi,Rapak Dalam,Kec, Kec, Rapak Dalam, Kec. Loa Janan Ilir, Kota Samarinda, Kalimantan Timur 75131'
        ]);

        Toko::create([
            'x' => '-0.51223068396688', //latlang
            'y' => '117.14369744942', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => '23 BARBERSHOP',
            'pemilik' => 'Aslam',
            'no_hp' => '082334228639',
            'alamat' => 'Jl. Daeng Mangkona No.RT.17, Baqa, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75131'
        ]);


        Toko::create([
            'x' => '-0.52647803422056', //latlang
            'y' => '117.10902180678', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'DTJOEKOER BARBERSHOP',
            'pemilik' => 'Muhammad Rafisal',
            'no_hp' => '081350316661',
            'alamat' => 'Jl. Latsitarda II, Karang Asam Ulu, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.5190110406717', //latlang
            'y' => '117.09245463732', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Barrack-Cut BARBERSHOP',
            'pemilik' => 'Galih Novialdi',
            'no_hp' => '081350204332',
            'alamat' => 'Jl. Jakarta, Loa Bakung, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.50141653127154', //latlang
            'y' => '117.10654043128', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Awiers BARBERSHOP',
            'pemilik' => 'Awi',
            'no_hp' => '082288978898',
            'alamat' => 'Jl. Senyiur 2, Loa Bakung, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.50278963453664', //latlang
            'y' => '117.11751973463', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Classics BARBERSHOP',
            'pemilik' => 'Andre',
            'no_hp' => '082144858888',
            'alamat' => 'Jl. Meranti No.31 RT 16, Karang Anyar, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75124'
        ]);

        Toko::create([
            'x' => '-0.49540857458108', //latlang
            'y' => '117.12670419675', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Rock N Cut BARBERSHOP',
            'pemilik' => 'Rahman',
            'no_hp' => '085787801698',
            'alamat' => 'Jl. P Antasari No.51, Tlk. Lerong Ulu, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75126'
        ]);

        Toko::create([
            'x' => '-0.48631084446623', //latlang
            'y' => '117.12627404112', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Bara BARBERSHOP',
            'pemilik' => 'Steven Alexander Grean Tekwan',
            'no_hp' => '085778882375',
            'alamat' => 'Jl. P Antasari No.51, Tlk. Lerong Ulu, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75126'

        ]);
        Toko::create([
            'x' => '-0.483907599685582', //latlang
            'y' => '117.12695861858187', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'BeJo BARBERSHOP',
            'pemilik' => 'RM Rohman',
            'no_hp' => '087810112930',
            'alamat' => 'Jl. P. Suryanata, Air Putih, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243'

        ]);
        Toko::create([
            'x' => '-0.48416515833869', //latlang
            'y' => '117.12769036607', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Keluncum BARBERSHOP',
            'pemilik' => 'ery hardani',
            'no_hp' => '08125505653',
            'alamat' => 'jl. Ir. H. Juanda, Air Putih, Samarinda Ulu, Samarinda City, East Kalimantan 75243'
        ]);

        Toko::create([
            'x' => '-0.49721094005038313', //latlang
            'y' => '117.13618740323147', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Bejo2 BARBERSHOP',
            'pemilik' => 'Hamdan',
            'no_hp' => '081254305471',
            'alamat' => 'Jl. Pasundan No.19, RT.37, Jawa, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.4891431531878445', //latlang
            'y' => '117.14618460380844', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'CORNERS BARBERSHOP',
            'pemilik' => 'Didik Purwanto',
            'no_hp' => '085346903383',
            'alamat' => 'Jl. Pahlawan No.7, Dadi Mulya, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.5014164982056557', //latlang
            'y' => '117.15064880077142', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'GoodFellas BARBERSHOP',
            'pemilik' => 'GoodFellas',
            'no_hp' => '082168149000',
            'alamat' => 'Jl. Pulau Kalimantan No.14, Pelabuhan, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.49703925516883224', //latlang
            'y' => '117.15425273302132', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'JORDAN HAIR STUDIO BARBERSHOP',
            'pemilik' => 'Cepot',
            'no_hp' => '0811584523',
            'alamat' => 'Jl. Imam Bonjol No.7, Pelabuhan, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.49092407449122133', //latlang
            'y' => '117.16219434656837', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'JooxBox BARBERSHOP',
            'pemilik' => 'Wahid',
            'no_hp' => '08115832880',
            'alamat' => 'Jl. Danau Toba No.36, Sungai Pinang Luar, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75113'
        ]);

        Toko::create([
            'x' => '-0.5025751539049782', //latlang
            'y' => '117.15657235304298', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Star BARBERSHOP',
            'pemilik' => 'Nesya nesa',
            'no_hp' => '08113542787',
            'alamat' => 'Jl. Pangeran Hidayatullah No.20, Karang Mumus, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.4901730893480705', //latlang
            'y' => '117.1617200696629', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Outcast BARBERSHOP',
            'pemilik' => 'Irwan',
            'no_hp' => '085250162960',
            'alamat' => 'Jl. Urip Sumoharjo, No. 84, Sidomulyo, Kec. Samarinda Ilir, Sidomulyo, Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.48373601882722705', //latlang
            'y' => '117.15425451286522', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Alaika BARBERSHOP',
            'pemilik' => 'juman mahkota',
            'no_hp' => '082250337778',
            'alamat' => 'Gg. 16 No.2a, Bandara, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.4776744224065633', //latlang
            'y' => '117.16574529768776', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'MERAH PUTIH BARBERSHOP',
            'pemilik' => 'Akbar',
            'no_hp' => '085102522099',
            'alamat' => 'Jl. Kemakmuran No.15, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75117'
        ]);

        Toko::create([
            'x' => '-0.48120409295347705', //latlang
            'y' => '117.15356768937303', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Bohemians BARBERSHOP',
            'pemilik' => 'Felix',
            'no_hp' => '085158880619',
            'alamat' => 'Jl. Camar No.81, Bandara, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75117'
        ]);

        Toko::create([
            'x' => '-0.49094553447558', //latlang
            'y' => '117.13296783468', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Old Razors BARBERSHOP',
            'pemilik' => 'Reza',
            'no_hp' => '082297787856',
            'alamat' => 'Jl. Ruko Grand Mutiara Blk. AA No.5, Tlk. Lerong Ilir, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75128'
        ]);

        Toko::create([
            'x' => '-0.487040344556', //latlang
            'y' => '117.13279768617', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'TANGGA BARBERSHOP',
            'pemilik' => 'Alex Sun',
            'no_hp' => '0823936908811',
            'alamat' => 'Jl. Wijaya Kusuma XII No.12, Air Hitam, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.48442266187214', //latlang
            'y' => '117.13202719005', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'hari_buka' => $hari_buka,
            'hari_tutup' => $hari_tutup,
            'nama' => 'Bujang BARBERSHOP',
            'pemilik' => 'Alex Sun',
            'no_hp' => '0823936908811',
            'alamat' => 'Jl. Juanda 2 No.24, Air Hitam, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243'
        ]);
    }
}
