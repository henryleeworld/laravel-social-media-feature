<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Carol',
                'email'          => 'carol.danvers@marvel.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Tony',
                'email'          => 'tony.stark@marvel.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
