<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCategoriesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::dropIfExists('blog_categories');
    }
}
