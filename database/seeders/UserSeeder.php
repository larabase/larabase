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
        User::factory()->create([
            'name' => 'momoadmin',
            'first_name' => 'Mohamed',
            'last_name' => 'Doumbia',
            'phone_number' => '+2550101010101',
            'role' => 'super-admin',
            'password' => 'password1234',
            'email' => 'admin@djelischool.com',
        ]);
    }
}
