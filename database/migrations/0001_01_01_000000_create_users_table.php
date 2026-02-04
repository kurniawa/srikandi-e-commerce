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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            /**
             * tambahan kolom
             */
            $table->string('username', 20)->unique();
            $table->string('id_type', 20)->nullable(); // di Indonesia biasanya KTP
            $table->string('id_number', 50)->nullable()->unique(); // nomor KTP
            $table->string('phone_type', 20)->nullable();
            $table->string('phone', 20)->nullable()->unique();
            $table->string('role', 20)->default('customer'); // ['developer', 'superadmin', 'admin', 'user', 'customer']
            $table->string('type', 20)->default('guest'); // ["reseller", "dropshipper", "seller", "buyer"]
            // $table->string('category', 20)->default('external'); // ['internal', 'external']
            $table->string('rank', 20)->nullable(); // golongan user, misal untuk user biasa: silver, gold, platinum
            $table->enum('is_creditor', ['yes', 'no'])->default('no'); // ["creditor", "debtor"]
            // $table->foreignId('creditor_id')->nullable()->constrained('users')->onDelete('set null'); // jika dia debtor, maka creditor_id wajib diisi
            // $table->string('account_type', 20)->nullable();
            $table->tinyInteger('clearance_level')->default(1);
            // $table->tinyInteger('access_level')->nullable(); // akses ke konten mana saja
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('photo')->nullable(); // path ke foto profil
            $table->date('birthdate')->nullable();
            $table->text('description')->nullable();
            $table->string('created_by', 20)->nullable(); // username dari auth user yang membuat
            $table->string('updated_by', 20)->nullable(); // username dari auth user yang melakukan update
            //
            //
            
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
