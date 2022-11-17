<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
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
                'name' => 'Admin',
                'notelp' => '08385527909',
                'email' => 'admin@gmail.com',
                'type' => 1,
                'password' => bcrypt('admin'),
            ],
            [
                'name' => 'User',
                'notelp' => '08385527909',
                'email' => 'user@gmail.com',
                'type' => 0,
                'password' => bcrypt('user'),
            ],

        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
