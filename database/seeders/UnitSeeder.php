<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $units = [
             [
                 'name' => 'Liter',
                 'symbol' => 'l',
                 'factor' => 1,
                 'type_id' => 4,
                 'created_at' => new \DateTime('now'),
                 'updated_at' => new \DateTime('now')
             ],
             [
                 'name' => 'Milliliter',
                 'symbol' => 'ml',
                 'factor' => 1000,
                 'type_id' => 4,
                 'created_at' => new \DateTime('now'),
                 'updated_at' => new \DateTime('now')
             ],
             [
                 'name' => 'Kilogram',
                 'symbol' => 'kg',
                 'factor' => 1,
                 'type_id' => 3,
                 'created_at' => new \DateTime('now'),
                 'updated_at' => new \DateTime('now')
             ],
             [
                 'name' => 'gram',
                 'symbol' => 'g',
                 'factor' => 1000,
                 'type_id' => 3,
                 'created_at' => new \DateTime('now'),
                 'updated_at' => new \DateTime('now')
             ]
         ];

         Unit::insert($units);
    }
}
