<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\supplier;
use App\Models\med;
use App\Models\shipment;
use App\Models\shipmentMed;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        supplier::factory(20)->create();
        med::factory(50)->create();
        shipment::factory(20)->create();
        shipmentMed::factory(100)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
