<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'categoryOne',
            'description' => 'desc one'
        ]);
        Category::create([
            'name' => 'categoryTwo',
            'description' => 'desc two'
        ]);
    }
}
