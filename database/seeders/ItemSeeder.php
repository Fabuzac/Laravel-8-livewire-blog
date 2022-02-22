<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 10 ; $i++) { 
            Item::create([
                'title' => $faker->sentence($nbWords = 3),
                'description' => $faker->sentence(),
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min=100, $max = 1000)         
            ]);
        }
    }
}