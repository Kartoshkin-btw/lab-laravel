<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	
	public function run()
    {
        DB::table('products')->insert(
		[
		'name' => 'Blue T-Shirt',
		'description' => 'Blue T-Shirt',
		'photo' => 'https://sun9-34.userapi.com/c858232/v858232944/1cdf36/4wo9KJl4naY.jpg',
		'price' => 4450.00
		]);
		DB::table('products')->insert(
		[
		'name' => 'Red T-Shirt',
		'description' => 'Blue T-Shirt',
		'photo' => 'https://sun9-33.userapi.com/c858232/v858232944/1cdf48/QRzF-AaYJOo.jpg',
		'price' => 7500.00
		]);
		DB::table('products')->insert(
		[
		'name' => 'SIDI DOMA',
		'description' => 'SIDI DOMA',
		'photo' => 'https://sun9-21.userapi.com/c858232/v858232944/1cdf2c/J0mKtPER5VY.jpg',
		'price' => 9999.00
		]);
		DB::table('products')->insert(
		[
		'name' => 'White T-Shirt',
		'description' => 'White T-Shirt',
		'photo' => 'https://sun9-28.userapi.com/c858232/v858232944/1cdf25/Vh_HhpsnHRM.jpg',
		'price' => 999.00
		]);
		DB::table('products')->insert(
		[
		'name' => 'Black T-Shirt',
		'description' => 'Black T-Shirt',
		'photo' => 'https://sun9-46.userapi.com/c858232/v858232944/1cdf1b/QwQa-0NNz2s.jpg',
		'price' => 999.00
		]);
		DB::table('products')->insert(
		[
		'name' => 'Black T-Shirt ROBERT B.WIEDE',
		'description' => 'Black T-Shirt ROBERT B.WIEDE',
		'photo' => 'https://sun9-27.userapi.com/c858232/v858232944/1cdf0b/z8zy3fLcN0E.jpg',
		'price' => 999.00
		]);

    }
}
