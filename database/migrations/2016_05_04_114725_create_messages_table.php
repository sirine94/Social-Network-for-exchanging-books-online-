<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

              Schema::create('messages', function (Blueprint $table) {
                  $table->increments('id');
                  $table->integer('id_1')->unsigned(); //source
                  $table->string('nom');
                  $table->string('prenom');
                  $table->integer('id_2')->unsigned();  //destinataire
                  $table->string('message');
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
