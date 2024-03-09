<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt(12345678),
            'image' => 'defult.png',
            'type' => 'admin',
        ]);
        User::create([
            'name' => 'Staff',
            'email' => 'user@staff.com',
            'password' => bcrypt(12345678),
            'image' => 'defult.png',
            'type' => 'staff',
        ]);
    }
}