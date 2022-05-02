<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('user_cover')->nullable();
            $table->string('user_last_name')->required();
            $table->tinyInteger('user_cell_number')->required();
            $table->string('user_tax_code')->required();
            $table->string('user_street')->required();
            $table->string('user_city')->required();
            $table->tinyInteger('user_zip_code')->required();
            $table->string('restaurant_name')->required();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            Schema::dropIfExists('users');

        });
    }
}
