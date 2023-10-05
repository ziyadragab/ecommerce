<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create
        (
            [
                'name' => 'Category 1',
                'slug' => 'Category 1',
                'image'=>'1.png'
            ]);


        Category::create
        (
            [
                'name' => 'Category 2',
                'slug' => 'Category 2',
                'image'=>'2.png'
            ]);

    }
}
