<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('rols', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo',45);
            $table->timestamps();
        });

        Schema::create('users_rols', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('rol_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('rol_id')->references('id')->on('rols');
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
        //
    }
}
