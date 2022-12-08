<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAuthorIdColumnInImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
          $table->foreignId('author_id')
                ->nullable()
                ->references('id')
                ->on('authors')
                ->onDelete('cascade')
                ->after('book_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
          $table->dropForeign(['author_id']);
          $table->dropColumn('author_id');
        });
    }
}
