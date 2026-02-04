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
        Schema::create('ornament_types', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('category', 50)->default('jewelry');
            $table->tinyInteger('parent_id')->nullable()->constrained('ornament_types')->onDelete('set null');
            $table->string('parent_slug', 50)->nullable();
            $table->string('name', 50);
            $table->string('localname', 50)->nullable();
            $table->string('slug', 50)->unique();
            $table->text('description')->nullable();
            $table->string('barcode', 2)->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ornament_types');
    }
};
