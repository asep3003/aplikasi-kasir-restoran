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
        $data = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'role' => 'Admin',
            ],
            [
                'name' => 'Mohamad Asep Saepulloh',
                'username' => 'asep30',
                'password' => Hash::make('asep30'),
                'role' => 'Manager',
            ],
            [
                'name' => 'Udin',
                'username' => 'udin',
                'password' => Hash::make('udin'),
                'role' => 'Kasir',
            ]
        ];
        User::insert($data);
    }
}
