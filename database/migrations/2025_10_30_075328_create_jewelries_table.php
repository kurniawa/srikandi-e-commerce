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
        Schema::create('jewelries', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('ornament_id')->nullable()->constrained('ornaments')->onDelete('set null');
            $table->string('ornament_type', 50)->comment('Slug dari ornament_type->name atau ornament->type');
            $table->string('ornament_varian', 100)->comment('Slug dari ornament->varian');
            $table->string('gold_color');
            $table->decimal('gold_purity', 5, 2);
            $table->string('shortname', 200);
            $table->string('annotation', 50)->nullable()->comment('Keterangan tambahan pada nama perhiasan, bisa ditulis di dalam kurung tertentu');
            $table->string('name')->comment('Nama lengkap perhiasan, lebih panjang dari shortname, disertai detail specs perhiasan tersebut');
            $table->smallInteger('year')->nullable()->comment('Untuk menunjukkan tahun produksi perhiasan/LM terkait');
            $table->string('edition', 50)->nullable()->comment('Edisi biasanya menunjukkan tahun produksi perhiasan/LM terkait, tapi bisa saja menunjukkan keterangan lain.');
            $table->tinyInteger('condition')->default(99)->comment('99=>mulus|80=>cacat dikit hampir tidak terlihat|70=>cacat lumayan keliatan|50=>rusak');
            $table->string('stamp', 50)->nullable()->comment('Di setiap perhiasan biasanya terdapat cap yang biasanya menunjukkan informasi tentang persentase emas tersebut.');
            $table->string('age_range', 20)->nullable()->comment('Pilihan usia: bayi, anak, remaja, dewasa, senior');
            $table->smallInteger('size')->nullable()->comment('Ukuran perhiasan, misalnya untuk cincin, gelang atau kalung');
            $table->string('brand', 50)->nullable()->comment('Beberapa perhiasan memiliki merek tertentu, misalnya UBS');
            $table->tinyInteger('plates')->default(0)->comment('Hanya untuk menunjukkan jumlah pelat yang ada, biasanya ada pada perhiasan gelang');
            // $table->timestamps(); // timestamps tidak diperlukan karena sudah ditampung dalam tabel products
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jewelries');
    }
};
