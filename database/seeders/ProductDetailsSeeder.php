<?php

namespace Database\Seeders;

use App\Models\ProductDetails;
use Illuminate\Database\Seeder;

class ProductDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productDetails = [
            [
                'product_id' => 1,
                'unit_id' => 1,
                'quantity' => 1,
                'created_at' => new \DateTime('now'),
                'updated_at' => new \DateTime('now')
            ],
            [
                'product_id' => 1,
                'unit_id' => 2,
                'quantity' => 500,
                'created_at' => new \DateTime('now'),
                'updated_at' => new \DateTime('now')
            ],
            [
                'product_id' => 3,
                'unit_id' => 3,
                'quantity' => 2,
                'created_at' => new \DateTime('now'),
                'updated_at' => new \DateTime('now')
            ],
            [
                'product_id' => 3,
                'unit_id' => 4,
                'quantity' => 800,
                'created_at' => new \DateTime('now'),
                'updated_at' => new \DateTime('now')
            ]
        ];

        ProductDetails::insert($productDetails);
    }
}
