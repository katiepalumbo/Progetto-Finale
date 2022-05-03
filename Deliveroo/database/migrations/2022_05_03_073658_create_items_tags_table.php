<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_tags', function (Blueprint $table) {

            $table->unsignedBigInteger('items_id');
            $table->foreign('items_id')->references('id')->on('items')->onDelete('cascade');

            $table->unsignedBigInteger('tags_id');
            $table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade');

            $table->index(['items_id', 'tags_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_tags');
    }
}
