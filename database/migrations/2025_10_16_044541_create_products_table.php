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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('category_id')->constrained('product_categories')->onDelete('cascade');
            $table->string('category_slug', 50);
            $table->string('shortname', 100);
            $table->string('name');
            $table->string('slug')->unique();
            $table->decimal('weight', 7, 2)->nullable();
            $table->decimal('weight_fee', 10, 2);
            $table->decimal('weight_price', 15, 2);
            $table->decimal('price', 15, 2);
            $table->string('unit', 20)->nullable();
            $table->string('tray', 20)->nullable();
            $table->string('status', 20)->default('ready'); // ['ready', 'on display', 'active', 'inactive', 'archived', 'sold', 'out of stock', 'buyback', 'sorted', 'cleaned']
            $table->text('description')->nullable();
            $table->string('barcode', 13)->nullable()->unique();
            $table->string('created_by', 20)->nullable(); // username dari auth user yang membuat
            $table->string('updated_by', 20)->nullable(); // username dari auth user yang melakukan update
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
    /**
     * Barcode rule:
     * Digit ke-1 dan 2: kode: ornament_type
     * Earring: 01 | Ear stud: 02 | Ring: 03 | Necklace: 05 | Bracelet: 06 | Anklet: 07 | Pendant: 08 | Gold Bulion: 09 | Brooch: 10 | Lain-lain: 9000000
     *
     * Digit ke-3, 4, 5: kode ornament->varian
     * Digit ke-5: kode gold_color
     * Digit ke-6,7: kode gold_purity, yakni merujuk pada tabel gold_standards
     * Digit ke 8 s.d. 13 (5 digit terakhir): kode urutan item yang diinsert, artinya masih bisa menampung sebanyak 99.999 item.
     *
     */
};
