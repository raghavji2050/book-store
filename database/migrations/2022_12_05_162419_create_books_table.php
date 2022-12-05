<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sub_title')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('discounted_price')->nullable();
            $table->string('sku')->nullable();
            $table->decimal('stars')->nullable();
            $table->boolean('in_stock')->nullable();
            $table->foreignId('author_id')
                  ->onUpdate('cascade')
                  ->onDelete('cascade')
                  ->on('authors')
                  ->constrained();
            $table->foreignId('collection_id')
                  ->nullable()
                  ->onUpdate('cascade')
                  ->onDelete('cascade')
                  ->on('collections')
                  ->constrained();
            $table->foreignId('category_id')
                  ->nullable()
                  ->onUpdate('cascade')
                  ->onDelete('cascade')
                  ->on('categories')
                  ->constrained();
            $table->integer('order_by')->nullable();
            $table->integer('reviews_count')->nullable();
            $table->json('images')->nullable();
            $table->string('featured_image')->nullable();
            $table->integer('total_pages')->nullable();
            $table->string('isbn')->nullable();
            $table->boolean('status')->default(false);
            $table->json('languages')->nullable();
            $table->string('condition')->nullable();
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
        Schema::dropIfExists('books');
    }
}
