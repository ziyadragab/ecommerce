<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
        'phone'=>'01032499503',
        'email'=>'ziyadragab00@gmail.com',
        'address'=>'Egypt-Cairo-Elnozha Elgedida'
        ]);
    }
}
