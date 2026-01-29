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
        $user1 = User::create([
            'name' => 'Vitor Silva',
            'email' => 'vitor@dreamcode.com',
            'password' => bcrypt('teste123'),
        ]);
        $user2 = User::create([
            'name' => 'Maria Eduarda',
            'email' => 'maria@dreamcode.com',
            'password' => bcrypt('teste123'),
        ]);
    }
}
