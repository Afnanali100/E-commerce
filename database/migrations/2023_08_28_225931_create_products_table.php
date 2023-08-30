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
            $table->id('product_id'); // Primary key
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('product_availability');
            $table->string('product_name')->unique();
            $table->string('product_picture');
            $table->integer('product_price');

            $table->foreign('admin_id')->references('admin_id')->on('admins');
            $table->foreign('category_id')->references('category_id')->on('categories');
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
};
