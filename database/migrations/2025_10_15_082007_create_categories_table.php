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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('term');
            $table->foreignId('parent_id')->nullable()->constrained('categories')->onDelete('set null');
            $table->string('parent_slug')->nullable();
            $table->string('classification')->nullable();
            $table->string('class')->nullable();
            $table->string('name');
            $table->string('nama');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->boolean('has_children')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
