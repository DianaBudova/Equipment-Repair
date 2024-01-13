<?php

namespace Database\Seeders;

use App\Models\PriceDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PriceDetail::create([
            'detail' => 'glass',
            'price' => 75,
            'img_path' => 'https://hips.hearstapps.com/digitalspyuk.cdnds.net/13/06/tech-transparent-smartphone.jpg?resize=980:*',
            'brand_id' => 1
        ]);
        PriceDetail::create([
            'detail' => 'audio system',
            'price' => 189,
            'img_path' => 'https://www.usni.org/sites/default/files/styles/hero_image/public/BJM-NH-JF-21%20opener.jpg?itok=iCmanuvq',
            'brand_id' => 2
        ]);
        PriceDetail::create([
            'detail' => 'stereo system',
            'price' => 189,
            'img_path' => 'https://www.lifewire.com/thmb/PVNcGCRUtbRNVX9MBipA9c4GSRE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/phone-touchscreen-7070be62721b4b4a8dc0b14fe44d179b.jpg',
            'brand_id' => 2
        ]);
    }
}
