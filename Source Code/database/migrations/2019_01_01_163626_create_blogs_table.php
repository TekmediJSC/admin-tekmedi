<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('image');
            $table->text('content');
            $table->text('url');
            $table->text('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->integer('views')->unsigned()->default('0');
            $table->text('user_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('blogs');
    }
}
