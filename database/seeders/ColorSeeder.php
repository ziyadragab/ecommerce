<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $colors = [
            ['name' => 'Red'],
            ['name' => 'Blue'],
            ['name' => 'Green'],
            ['name' => 'Yellow'],
            ['name' => 'Orange'],
            ['name' => 'Purple'],
            ['name' => 'Pink'],
            ['name' => 'Black'],
            ['name' => 'White'],
            ['name' => 'Gray'],
        ];

        Color::insert($colors);
    }
}
