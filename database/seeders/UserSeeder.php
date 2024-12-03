<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' =>'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        $admin->assignRole('admin');

        $penulis = User::create([
            'name' =>'penulis',
            'email' => 'penulis@gmail.com',
            'password' => bcrypt('penulis')
        ]);

        $penulis->assignRole('penulis');
    }
}