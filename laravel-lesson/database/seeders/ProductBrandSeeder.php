<?php

namespace Database\Seeders;

use App\Models\ProductBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductBrand::create([
            'name' => 'LG'
        ]);
        ProductBrand::create([
            'name' => 'Samsung'
        ]);
        ProductBrand::create([
            'name' => 'Apple'
        ]);
        ProductBrand::create([
            'name' => 'Philips'
        ]);
    }
}
