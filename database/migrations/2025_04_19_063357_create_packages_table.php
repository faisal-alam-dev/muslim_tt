<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_image')->nullable();
            $table->string('package_name')->nullable();
            $table->string('package_name_slug')->unique();
            $table->text('package_short_description')->nullable();
            $table->longText('package_long_description')->nullable();

            $table->string('package_price_with_food')->nullable();
            $table->string('package_price_without_food')->nullable();
            $table->string('package_duration_start')->nullable();
            $table->string('package_duration')->nullable();
            $table->string('package_hotel_makkah')->nullable();
            $table->string('package_hotel_madinah')->nullable();
            $table->string('package_flights_up')->nullable();
            $table->string('package_flights_down')->nullable();
            $table->string('package_land_transport')->nullable();
            $table->string('package_food')->nullable();
            $table->string('package_special_services')->nullable();

            $table->enum('package_type', ['umrah', 'hajj'])->nullable();
            $table->enum('package_status', ['active', 'inactive'])->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
