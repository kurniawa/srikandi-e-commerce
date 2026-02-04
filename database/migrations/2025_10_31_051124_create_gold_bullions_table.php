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
        Schema::create('gold_bullions', function (Blueprint $table) {
            $table->id();
            $table->decimal('gold_purity', 5, 2)->default(99.99);
            $table->string('shortname', 200);
            $table->string('annotation', 50)->nullable()->comment('Keterangan tambahan pada LM, bisa ditulis di dalam kurung tertentu');
            $table->string('name')->comment('Nama LM, lebih panjang dari shortname, disertai detail specs LM tersebut');
            $table->smallInteger('year')->nullable()->comment('Untuk menunjukkan tahun produksi perhiasan/LM terkait');
            $table->string('edition', 50)->nullable()->comment('Edisi biasanya menunjukkan tahun produksi perhiasan/LM terkait, tapi bisa saja menunjukkan keterangan lain.');
            $table->tinyInteger('condition')->default(99)->comment('99=>mulus|97=>cacat packing sedikit|96=>cacat packing lumayan|93=>packing rusak|80=>cacat dikit hampir tidak terlihat|70=>cacat lumayan keliatan|50=>rusak');
            $table->string('brand', 50)->nullable()->comment('Merek dari LM terkait');
            // $table->timestamps(); // timestamps tidak diperlukan karena sudah ditampung dalam tabel products
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gold_bullions');
    }
};
