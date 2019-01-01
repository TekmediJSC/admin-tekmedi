<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceCategoriesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('service_categories', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->text('name');
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
        Schema::dropIfExists('service_categories');
    }
}
