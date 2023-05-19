<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Lorraine Dayton',
            'email' => 'lorrainerdayton@armyspy.com',
            'email_verified_at' => now(),
            'password' => bcrypt('faitaLai1'),
            'is_admin' => true,
        ]);
    }
}
