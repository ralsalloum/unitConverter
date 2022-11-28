<?php

namespace Database\Seeders;

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
        $products = [
            [
                'name' => 'prod. 1',
                'description' => 'prod. 1 description',
                'type_id' => 4,
                'created_at' => new \DateTime('now'),
                'updated_at' => new \DateTime('now')
            ],
            [
                'name' => 'prod. 2',
                'description' => 'prod. 2 description',
                'type_id' => 1,
                'created_at' => new \DateTime('now'),
                'updated_at' => new \DateTime('now')
            ],
            [
                'name' => 'prod. 3',
                'description' => 'prod. 3 description',
                'type_id' => 3,
                'created_at' => new \DateTime('now'),
                'updated_at' => new \DateTime('now')
            ],
            [
                'name' => 'prod. 4',
                'description' => 'prod. 4 description',
                'type_id' => 2,
                'created_at' => new \DateTime('now'),
                'updated_at' => new \DateTime('now')
            ]
        ];

        Product::insert($products);
    }
}
