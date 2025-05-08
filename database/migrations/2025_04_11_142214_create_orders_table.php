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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('vehicle_number');
            $table->date('stnk_date');
            $table->string('plate_size');
            $table->string('custom_size')->nullable();
            $table->string('plate_material');
            $table->string('plate_color');
            $table->string('custom_plate_color')->nullable();
            $table->string('font_type');
            $table->string('custom_font_type')->nullable();
            $table->string('finishing');
            $table->integer('quantity');
            $table->string('stnk_file')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
