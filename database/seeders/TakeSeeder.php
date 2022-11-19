<?php

namespace Database\Seeders;

use App\Models\Take;
use Illuminate\Database\Seeder;

class TakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Take::query()->upsert([
            ['method' => 'Ambil Sendiri'],
            ['method' => 'Kurir'],
            ['method' => 'COD'],
        ], 'method');
    }
}
