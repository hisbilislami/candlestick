<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candlestick', function (Blueprint $table) {
            $table->id();
            $table->string('period')->nullable();
            $table->timestamp('date')->nullable();
            $table->string('color', 5)->nullable();
            $table->timestamp('minutes')->nullable();
            $table->integer('kekuatan')->nullable();
            $table->integer('breakout')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candlestick');
    }
};
