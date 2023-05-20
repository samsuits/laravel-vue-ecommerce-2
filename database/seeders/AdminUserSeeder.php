<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mike Dayton',
            'email' => 'mikerdayton@armyspy.com',
            'email_verified_at' => now(),
            'password' => bcrypt('faitaLai1'),
            'is_admin' => true,
        ]);
    }
}
