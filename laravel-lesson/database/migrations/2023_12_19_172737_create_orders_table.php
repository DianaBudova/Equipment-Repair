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
            $table->string('user_name');
            $table->string('user_surname');
            $table->string('user_patronymic');
            $table->string('user_phone');
            $table->string('user_address');
            $table->integer('product_repair_id');
            $table->integer('price_detail_id');
            $table->integer('product_brand_id');
            $table->integer('type_repair_id');
            $table->integer('category_id');
            $table->integer('status_id');
            $table->integer('summaryPrice');
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
