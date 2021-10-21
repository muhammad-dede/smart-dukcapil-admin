<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nama' => 'Administrator',
                'username' => 'admin',
                'email' => 'bang.chyto@gmail.com',
                'password' => Hash::make('password'),
                'profil' => 'default.svg',
                'is_admin' => 1,
                'aktif' => 1,
            ],
            [
                'nama' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('password'),
                'profil' => 'default.svg',
                'is_admin' => 0,
                'aktif' => 1,
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
