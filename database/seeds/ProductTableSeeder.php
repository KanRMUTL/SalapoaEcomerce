<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{

    public function run()
    {
        Product::insert([
            [
                'product_id' => 1,
                'product_name' => 'ไส้อั่ว',
                'product_img' => '01.jpg',
                'product_price' => '20'
            ],
            [
                'product_id' => 2,
                'product_name' => 'ไส้มะพร้าวหวาน',
                'product_img' => '02.jpg',
                'product_price' => '13'
            ],
            [
                'product_id' => 3,
                'product_name' => 'ไส้พุทราถั่วแดง',
                'product_img' => '03.jpg',
                'product_price' => '15'
            ],
            [
                'product_id' => 4,
                'product_name' => 'ไส้กะเพราไข่เค็ม',
                'product_img' => '04.jpg',
                'product_price' => '20'
            ],
            [
                'product_id' => 5,
                'product_name' => 'ไส้เค็ม',
                'product_img' => '05.jpg',
                'product_price' => '10'
            ],
            [
                'product_id' => 6,
                'product_name' => 'ไส้ถั่วแดง',
                'product_img' => '06.jpg',
                'product_price' => '10'
            ]
        ]);
    }
}
