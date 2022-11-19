<?php

namespace Database\Seeders;

use App\Models\Fruit;
use Illuminate\Database\Seeder;

class FruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fruit::query()->upsert([
            ['name' => 'Pisang'],
            ['name' => 'Nangka'],
            ['name' => 'Mangga'],
        ], 'name');
    }
}
