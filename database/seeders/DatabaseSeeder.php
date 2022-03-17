<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new User();
        $user ->name = 'Admin';
        $user ->email='Admin@admin.com';
        $user ->password=bcrypt('admin123');
        $user->is_Admin=1;
        $user->save();
    }
}
