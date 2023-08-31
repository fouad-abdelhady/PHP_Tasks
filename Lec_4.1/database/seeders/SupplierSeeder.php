<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            'name'=> Str::random(10),
            'contact' => $this->getMobileNumber(),
            'address' => $this->getAddress(),
        ]);
    }
    private function getMobileNumber(): string{
        $carriers = ['012', '010', '011', '015'];
        $mainNumber = (string)rand(10000000, 99999999);
        return $carriers[random_int(0,3)].$mainNumber;
    }
    private function getAddress(): string{
        return (string)random_int(1,1000).' '.Str::random(random_int(5,15)).' ST, '.Str::random(random_int(5,10)).', Egypt';
    }
}
