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
        Schema::create('carlist', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama mobil
            $table->string('brand'); // Nama merek
            $table->string('model'); // Model
            $table->year('year'); // Tahun pembuatan
            $table->string('color'); // Warna
            $table->enum('type', ['sedan', 'suv', 'hatchback', 'mpv', 'truck', 'van', 'coupe', 'convertible']); // Jenis kendaraan
            $table->integer('seats'); // Jumlah kursi
            $table->enum('transmission', ['manual', 'automatic']); // Tipe transmisi
            $table->enum('fuel_type', ['petrol', 'diesel', 'electric', 'hybrid']); // Jenis bahan bakar
            $table->boolean('availability')->default(true); // Status ketersediaan
            $table->decimal('price', 10, 2); // Harga sewa harian
            $table->text('notes')->nullable(); // Catatan tambahan
            $table->string('photo_url')->nullable(); // URL foto kendaraan
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carlist');
    }
};
