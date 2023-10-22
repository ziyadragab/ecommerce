<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'ziyad',
            'email' => 'super_admin@admin.com',
            'password' => bcrypt('123456'),
            'status' => 1
        ]);
    }
}
