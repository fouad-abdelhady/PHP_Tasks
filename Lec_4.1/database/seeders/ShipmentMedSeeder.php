<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipmentMedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shipment_meds')->insert([
            'med_id' => random_int(1,20),
            'shipment_id'=> random_int(1,15),
            'buyingPricePerUnit' => random_int(5,50),
            'amount' => random_int(1,4)
        ]);
    }
}
