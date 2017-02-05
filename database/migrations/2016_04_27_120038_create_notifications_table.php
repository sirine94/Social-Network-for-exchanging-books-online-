<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_1')->unsigned();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('id_2')->unsigned();
            $table->string('notif');
            $table->string('type');
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
