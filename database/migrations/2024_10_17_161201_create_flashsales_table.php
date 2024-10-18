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
        Schema::create('flashsales', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('product_name'); // Nama produk
            $table->decimal('original_price', 10, 2); // Harga asli
            $table->decimal('discount_price', 10, 2); // Harga diskon
            $table->dateTime('start_time'); // Waktu mulai flash sale
            $table->dateTime('end_time'); // Waktu selesai flash sale
            $table->integer('stock'); // Jumlah stok produk
            $table->string('image'); // Nama file gambar
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flashsales');
    }
};
