<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')
                ->constrained()
                ->references('id')
                ->on('posts')
                ->onDelete('cascade')
                ->onUpdate('no action');
            $table->foreignId('category_id')
                ->constrained()
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('no action');
            $table->unique(['post_id', 'category_id']);
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
        Schema::dropIfExists('post_categories');
    }
}
