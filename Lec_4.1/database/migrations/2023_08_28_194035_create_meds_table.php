<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('meds', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("unitsPerPacket")->default(1);
            $table->integer("amount")->default(1);
            $table->float('sellingPricePerUnit', 5,2)->default(0);
            $table->float("totalPricePerPacket", 8,2)->virtualAs('unitsPerPacket * sellingPricePerUnit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meds');
    }
};
