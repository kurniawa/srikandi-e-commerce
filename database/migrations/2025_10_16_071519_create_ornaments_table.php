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
        Schema::create('ornaments', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->tinyInteger('type_id')->constrained('ornament_types')->onDelete('cascade');
            $table->string('type', 50);
            $table->string('varian', 100);
            $table->string('slug', 100)->unique();
            $table->string('barcode', 2)->nullable(); // tidak unique karena tergantung tipe ornament, masing-masing tipe ornament bisa memiliki jumlah varian maksimal 99
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ornaments');
    }
};
