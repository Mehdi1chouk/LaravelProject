<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            
            $table->text('address');
            $table->string('postal_code');
            $table->enum('payment_method', ['cash', 'card']); // Allowed payment methods
            $table->unsignedBigInteger('product_id'); // Foreign key for product
            $table->foreign('product_id')->references('id')->on('products'); // Foreign key constraint
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
