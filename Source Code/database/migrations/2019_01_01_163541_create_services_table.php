<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->text('short_description');
            $table->text('image');
            $table->text('content');
            $table->text('url');
            $table->text('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->integer('parent_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('services');
    }
}
