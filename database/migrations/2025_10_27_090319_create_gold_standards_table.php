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
        Schema::create('gold_standards', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name', 20);
            $table->string('slug')->unique();
            $table->string('class', 20);
            $table->decimal('purity', 5, 2);
            $table->tinyInteger('carat');
            $table->decimal('carat_ratio', 5, 2);
            $table->string('barcode', 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gold_standards');
    }
};
