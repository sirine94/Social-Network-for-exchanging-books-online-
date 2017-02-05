<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

              Schema::create('echanges', function (Blueprint $table) {
                  $table->increments('id');
                  $table->integer('id_1')->unsigned(); //Auth::user()
                  $table->integer('id_2')->unsigned(); //publicateur du livre
                  $table->integer('id_b')->unsigned();
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
        Schema::drop('echanges');
    }
}
