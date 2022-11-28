<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'Length',
                'description' => 'Measure related to Length',
                'created_at' => new \DateTime('now'),
                'updated_at' => new \DateTime('now')
            ],
            [
                'name' => 'Area',
                'description' => 'Measure related to Area',
                'created_at' => new \DateTime('now'),
                'updated_at' => new \DateTime('now')
            ],
            [
                'name' => 'Mass',
                'description' => 'Measure related to Mass',
                'created_at' => new \DateTime('now'),
                'updated_at' => new \DateTime('now')
            ],
            [
                'name' => 'Volume',
                'description' => 'Measure related to Volume',
                'created_at' => new \DateTime('now'),
                'updated_at' => new \DateTime('now')
            ]
        ];

        Type::insert($types);
    }
}
