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
            $table->id();
            $table->string('name');
            $table->text('main_description');
            $table->text('description')->nullable();
            $table->text('shipping_description')->nullable();
            $table->text('small_image')->nullable();
            $table->text('ingredients')->nullable();
            $table->text('icon')->nullable();
            $table->integer('count');
            $table->integer('type')->default(1);
            $table->bigInteger('visitor')->default(0);
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->boolean('discount_type')->nullable();
            $table->unsignedBigInteger("category_id")->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
