<?php

namespace Database\Seeders;

use App\Models\ProductRepair;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductRepairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductRepair::create([
            'name' => 'telephone'
        ]);
        ProductRepair::create([
            'name' => 'computer'
        ]);
        ProductRepair::create([
            'name' => 'television'
        ]);
        ProductRepair::create([
            'name' => 'stereo systems'
        ]);
        ProductRepair::create([
            'name' => 'touchpad'
        ]);
        ProductRepair::create([
            'name' => 'monitor'
        ]);
    }
}
