<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'REDMI NOTE 10S',
                'price'=>'RM 899.00',
                'description'=>'Brand: Xiaomi, SKU: 2141519722_MY-8826997863, Screen sizes: 6.43, Number of camera: Triple',
                'category'=>'Smartphone',
                'gallery'=>'http://my-test-11.slatic.net/p/52cbf4794c5fc6210ff694368e1b0df2.png',
            ],
            [
                'name'=>'OPPO A74',
                'price'=>'RM 978.50',
                'description'=>'Brand: OPPO, SKU: 2143035984_MY-8837268405, Screen sizes: 6.43, Number of camera: Quad',
                'category'=>'Smartphone',
                'gallery'=>'http://my-test-11.slatic.net/p/d2249bf5a423d6b17465623eb7c7493d.jpg',
            ],
            [
                'name'=>'Redmi Note 10 Pro',
                'price'=>'RM 380.00',
                'description'=>'Brand: xiaomi01, SKU: 2142977125_MY-8835287820, Warranty type: International Manufacturer Warranty, Warranty period: 1 Year',
                'category'=>'Smartphone',
                'gallery'=>'https://filebroker-cdn.lazada.com.my/kf/S5b6910e50a2846c5816d86a8fe06e632f.jpg',
            ],
            [
                'name'=>'Realme 7 Pro',
                'price'=>'RM 150.00',
                'description'=>'Brand: Realme, SKU: 2143035984_MY-8837458405, Screen sizes: 6.43, Number of camera: Quad',
                'category'=>'Smartphone',
                'gallery'=>'https://fdn2.gsmarena.com/vv/pics/realme/realme-7-pro-2.jpg',
            ],
        ]);
    }
}
