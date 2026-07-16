<?php
// database/seeders/UserSeeder.php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Habiel',
            'email'    => 'simahaswa@gmail.com',
            'password' => Hash::make('admin123'), // WAJIB di-hash!


        ]);

        $this->command->info('UserSeeder: Akun user baru berhasil dibuat.');

        $this->command->info('Login: simahaswa@gmail.com | password: admin123');


    }
}
