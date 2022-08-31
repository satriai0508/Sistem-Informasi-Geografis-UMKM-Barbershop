<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

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
            'name' => 'Admin Barbershop',
            'email' => 'admin.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => true
            ]);
            
        User::create([
            'name' => 'Nusantara Barbershop',
            'email' => 'nusantara.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Mister Tjoekoer Barbershop',
            'email' => 'mister.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'PUTRA DAERAH BARBERSHOP',
            'email' => 'putra.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Yoga BARBERSHOP',
            'email' => 'Yoga.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'M&J BARBERSHOP',
            'email' => 'M&J.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Ponixcut BARBERSHOP',
            'email' => 'Poni.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Eghe BARBERSHOP',
            'email' => 'Eghe.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Bark BARBERSHOP',
            'email' => 'Bark.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => '23 BARBERSHOP',
            'email' => 'duatiga.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'DTJOEKOER BARBERSHOP',
            'email' => 'dtjoekoer.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Barrack-Cut BARBERSHOP',
            'email' => 'Barrack.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Awiers BARBERSHOP',
            'email' => 'Awiers.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Classics BARBERSHOP',
            'email' => 'Classics.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Rock N Cut BARBERSHOP',
            'email' => 'Rock.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Bara BARBERSHOP',
            'email' => 'Bara.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'BeJo BARBERSHOP',
            'email' => 'Bejo.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Keluncum BARBERSHOP',
            'email' => 'Keluncum.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Bejo2 BARBERSHOP',
            'email' => 'Bejo2.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'CORNERS BARBERSHOP',
            'email' => 'Corners.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'GoodFellas BARBERSHOP',
            'email' => 'Good.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'JORDAN HAIR STUDIO BARBERSHOP',
            'email' => 'JORDAN.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'JooxBox BARBERSHOP',
            'email' => 'JooxBox .barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Star BARBERSHOP',
            'email' => 'Star.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Outcast BARBERSHOP',
            'email' => 'Outcast.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'ALAIKA BARBERSHOP',
            'email' => 'Alaika.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Merah Putih BARBERSHOP',
            'email' => 'merah putih.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Bohemians BARBERSHOP',
            'email' => 'Bohemians.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Old Razors BARBERSHOP',
            'email' => 'Old.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'TANGGA BARBERSHOP',
            'email' => 'Tangga.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Bujang BARBERSHOP',
            'email' => 'Bujang.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);


    }
}
