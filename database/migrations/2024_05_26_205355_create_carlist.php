<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('carlist', function (Blueprint $table) {
            $table->id();
            $table->string('VIN', 17)->unique();
            $table->string('make', 25)->notNull();
            $table->string('model', 50)->notNull();
            $table->integer('year')->notNull();
            $table->string('class', 20)->notNull();
            $table->integer('mileage')->notNull();
            $table->enum('fuel', ['Gasoline', 'Electric', 'Hybrid'])->notNull();
            $table->string('ext_color', 20)->notNull();
            $table->string('int_color', 20)->nullable();
            $table->string('features')->nullable();
            $table->string('photo')->nullable();
            $table->enum('status', ['Available', 'Rented', 'Under Maintenance'])->default('Available');
            $table->string('location', 50)->notNull();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('carlist');
    }
};
