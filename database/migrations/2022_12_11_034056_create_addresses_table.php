<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->string('type');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('address');
            $table->string('street')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('email');
            $table->string('phone');
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
        Schema::dropIfExists('addresses');
    }
}
