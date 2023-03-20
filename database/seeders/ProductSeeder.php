<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'LG mobile',
            'price'=>200,
            'description'=>'A smart phone with 4 gb and much more features',
            'category'=>'Mobile',
            'gallery'=>'https://www.lg.com/us/cell-phones/lg-lmf100tmyatmoay-t-mobile-wing-5g#',
        ],
            [
                'name'=>'Oppo mobile',
                'price'=>300,
                'description'=>'A smart phone with 8 gb and much more features',
                'category'=>'Mobile',
                'gallery'=>'https://www.lg.com/us/cell-phones/lg-lmf100tmyatmoay-t-mobile-wing-5g#',
            ],
            [
                'name'=>'Panasonic TV',
                'price'=>500,
                'description'=>'A smart TV with much more features',
                'category'=>'TV',
                'gallery'=>'https://panasonic.jp/viera/',
            ],
            [
                'name'=>'LG TV',
                'price'=>400,
                'description'=>'A smart TV with much more features',
                'category'=>'TV',
                'gallery'=>'https://www.lg.com/in/tvs/lg-55uq7500psf',
            ],
            [
                'name'=>'Sony Tablet',
                'price'=>030,
                'description'=>'A tablet with much more features',
                'category'=>'Tablet',
                'gallery'=>'https://www.sony.jp/tablet/',
            ],
        ]);
    }
}
