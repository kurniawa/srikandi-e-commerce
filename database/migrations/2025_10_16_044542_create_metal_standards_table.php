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
        Schema::create('metal_standards', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('slug')->unique();
            $table->string('class', 20);
            $table->decimal('purity', 5, 2);
            $table->decimal('fineness', 5, 1);
            $table->tinyInteger('carat');
            $table->decimal('carat_ratio', 5, 2);
            $table->string('barcode', 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metal_standards');
    }
};
