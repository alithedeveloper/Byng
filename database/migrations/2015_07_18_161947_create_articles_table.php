<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type',10);
            $table->string('url',100);
            $table->string('media_id', 80)->nullable();
            $table->string('title');
            $table->text('summary');
            $table->string('author',60)->nullable();
            $table->string('source',80)->nullable();
            $table->timestamp('posted');
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
        Schema::drop('articles');
    }
}
