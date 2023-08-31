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
        Schema::create('shipment_meds', function (Blueprint $table) {
            $table->id();
            $table->foreignId("med_id")->nullable(false);
            $table->foreignId("shipment_id")->nullable(false);
            $table->float("buyingPricePerUnit", 5, 2)->default(0);
            $table->integer("amount")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipment_meds');
    }
};
