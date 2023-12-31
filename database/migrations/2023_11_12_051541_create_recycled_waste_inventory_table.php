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
        Schema::create('recycled_waste_inventories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('amount');
            $table->decimal('recycled_price', 8, 2);
            $table->foreignId('waste_inventory_id')->constrained('waste_inventories');
            //$table->foreignId('employee_id')->constrained('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recycled_waste_inventories');
    }
};
