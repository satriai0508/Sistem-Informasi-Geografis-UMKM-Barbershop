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
            'name' => 'Alby Barbershop',
            'email' => 'alby.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Putri Barbershop',
            'email' => 'putri.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Ikko Barbershop',
            'email' => 'ikko.barber@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);
    }
}
