<?php

namespace Database\Seeders;

use App\Models\Delivery;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Delivery::query()->upsert([
            ['method' => 'Ambil Sendiri'],
            ['method' => 'Kurir'],
        ], 'method');
    }
}
