<?php

namespace Database\Seeders;

use App\Models\TypeRepair;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeRepairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeRepair::create([
            'name' => 'broken glass'
        ]);
        TypeRepair::create([
            'name' => 'off audio system'
        ]);
    }
}
