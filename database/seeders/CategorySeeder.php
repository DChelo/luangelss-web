<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Collares']);
        Category::create(['name' => 'Aretes']);
        Category::create(['name' => 'Pulseras']);
    }
}
