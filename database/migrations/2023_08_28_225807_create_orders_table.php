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
            $table->id('order_id'); 
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('order_date')->useCurrent();
            $table->string('order_status');
            $table->integer('room_no');
            $table->integer('total');
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('admin_id')->references('admin_id')->on('admins');
            $table->foreign('user_id')->references('user_id')->on('users');
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
