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
        Schema::create('accessories', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('category', 50);
            $table->string('slug')->unique();
            $table->string('varian', 50)->nullable();
            $table->string('color', 50)->nullable()->comment('keterangan ini diperlukan terutama untuk gems');
            $table->string('warna', 50)->nullable()->comment('color dalam bahasa indonesia');
            $table->string('name', 50)->nullable();
            $table->string('localname', 50)->nullable();
            $table->enum('transparency', ['transparent', 'translucent', 'opaque'])->nullable();
            $table->enum('cut', ['round', 'princess', 'emerald', 'asscher', 'cushion', 'marquise', 'oval', 'radiant', 'pear', 'heart'])->nullable();
            $table->enum('clarity', ['FL', 'IF', 'VVS1', 'VVS2', 'VS1', 'VS2', 'SI1', 'SI2', 'I1', 'I2', 'I3'])->nullable();
            $table->decimal('carat', 8, 2)->nullable();
            $table->decimal('size', 8, 2)->nullable()->comment('ukuran dalam mm');
            $table->decimal('weight', 10, 3)->nullable()->comment('berat dalam gram');
            $table->decimal('price_per_gram', 15, 2)->nullable();
            $table->decimal('total_price', 18, 2)->nullable();
            $table->string('codename', 20)->nullable()->unique();
            $table->string('description')->nullable();
            $table->string('barcode', 4)->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessories');
    }
};

/*

Tabel ringkas biar gampang dibaca
Grade	Kepanjangan	                Terlihat Loupe 10×	    Terlihat Mata
FL	    Flawless	                    ❌	                  ❌
IF	    Internally Flawless	            ❌	                  ❌
VVS1	Very Very Slightly Included	    ⚠️ Sangat sulit	       ❌
VVS2	Very Very Slightly Included	    ⚠️ Sangat sulit	       ❌
VS1	    Very Slightly Included	        ✅	                  ❌
VS2	    Very Slightly Included	        ✅	                  ❌
SI1	    Slightly Included	            ✅	              ⚠️ Kadang
SI2	    Slightly Included	            ✅	              ⚠️ Sering
I1	    Included	                    ✅	                  ✅
I2	    Included	                    ✅	                  ✅

*/
