<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('relations', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_1')->unsigned();
          $table->integer('id_2');
          $table->string('nom_2');
          $table->string('prenom_2');
          $table->rememberToken();
          $table->timestamps();
          $table->foreign('id_1')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('relations');
    }
}
