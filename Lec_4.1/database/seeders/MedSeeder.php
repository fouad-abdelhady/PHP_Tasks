<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('meds')->insert([
            'name' => Str::random(random_int(5,10)). Str::random(random_int(0,10)),
            'unitsPerPacket' => random_int(1,4),
            'amount' => random_int(70, 500),
            'sellingPricePerUnit' => random_int(0.1, 100),
        ]);
    }
}
