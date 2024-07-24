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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('total_amount');
            $table->string('status');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('costumer_id');
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
            $table->foreign('costumer_id')->references('id')->on('costumer')->onDelete('cascade');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
