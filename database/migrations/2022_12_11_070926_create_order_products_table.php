<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')
                  ->references('id')
                  ->on('orders')
                  ->onDelete('cascade');
            $table->foreignId('book_id')
                  ->references('id')
                  ->on('books')
                  ->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('unit_price');
            $table->decimal('net_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_products');
    }
}
