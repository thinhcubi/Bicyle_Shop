<?php

namespace Database\Seeders;

use App\Http\Controllers\ProductStatus;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = '26T5';
        $product->desc = '';
        $product->status = ProductStatus::Product_status1;
        $product->price = '20000';
        $product->category_id = '1';
        $product->producer_id = '2';
        $product->save();

        $product = new Product();
        $product->name = 'Lerbon';
        $product->desc = '';
        $product->status = ProductStatus::Product_status2;
        $product->price = '30000';
        $product->category_id = '2';
        $product->producer_id = '3';
        $product->save();

        $product = new Product();
        $product->name = 'Giant SM';
        $product->desc = '';
        $product->status = ProductStatus::Product_status1;
        $product->price = '40000';
        $product->category_id = '3';
        $product->producer_id = '1';
        $product->save();

        $product = new Product();
        $product->name = 'Cân bằng 8inch';
        $product->desc = '';
        $product->status = ProductStatus::Product_status2;
        $product->price = '15000';
        $product->category_id = '2';
        $product->producer_id = '3';
        $product->save();



    }
}
