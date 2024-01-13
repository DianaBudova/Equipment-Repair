<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'user_name' => 'John',
            'user_surname' => 'Doe',
            'user_patronymic' => 'Ivanovich',
            'user_phone' => '123456789',
            'user_address' => 'some address',
            'product_repair_id' => 1,
            'price_detail_id' => 2,
            'product_brand_id' => 1,
            'type_repair_id' => 2,
            'category_id' => 1,
            'status_id' => 2,
            'summaryPrice' => 500
        ]);
        Order::create([
            'user_name' => 'Mia',
            'user_surname' => 'Derezenko',
            'user_patronymic' => 'Ivanova',
            'user_phone' => '123456789',
            'user_address' => 'some address',
            'product_repair_id' => 2,
            'price_detail_id' => 1,
            'product_brand_id' => 2,
            'type_repair_id' => 1,
            'category_id' => 2,
            'status_id' => 1,
            'summaryPrice' => 750
        ]);
    }
}
