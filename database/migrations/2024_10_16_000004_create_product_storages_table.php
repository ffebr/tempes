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
        Schema::create('product_storages', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('warehouse_id')->constrained('warehouses')->onDelete('cascade');
            $table->string('storage_cell', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_storages');
    }
};
