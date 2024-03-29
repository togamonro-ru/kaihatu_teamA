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
        Schema::create('merchandise', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('category')->unique();
            $table->integer('CostPrice');
            $table->integer('PriceIncludingTax');
            $table->string('img');
            $table->string('remarks');
            $table->boolean('drinkbar_flg')->default(false);
            $table->boolean('course_flg')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchandise');
    }
};
