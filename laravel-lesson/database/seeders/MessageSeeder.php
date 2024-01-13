<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Message::create([
            'user_id' => 1,
            'manager_id' => 2,
            'text' => 'sometextOne',
        ]);
        Message::create([
            'user_id' => 2,
            'manager_id' => 1,
            'text' => 'sometextTwo',
        ]);
    }
}
