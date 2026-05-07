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
        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable()->comment('ID dari atribut induk jika ini adalah nilai dari atribut lain');
            $table->string('parent_slug')->nullable()->comment('Slug dari atribut induk untuk memudahkan pencarian nilai berdasarkan slug induk');
            $table->boolean('has_children')->default(false);
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('data_type')->nullable()->comment('Tipe atribut, misalnya string, integer, decimal, boolean, date, dll');
            $table->boolean('is_filterable')->default(false)->comment('Menandakan apakah atribut ini dapat digunakan sebagai filter pada pencarian produk');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attributes');
    }
};
