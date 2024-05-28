<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $UserData = [
            [
                'name'=>'King Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456'),

            ],
            [
                'name'=>'Verstappen Pembeli',
                'email'=>'pembeli@gmail.com',
                'role'=>'pembeli',
                'password'=>bcrypt('123456'),

            ],
        ];
        foreach ($UserData as $key => $val) {
            User::create($val);
        }
    }
}
