<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('books', function (Blueprint $table) {
       $table->increments('id');
        $table->string('titre');
        $table->string('auteur');
        $table->string('genre');
        $table->string('description');
       $table->integer('publicateur')->unsigned()->index();
       $table->string('etat');
        $table->timestamps();
        $table->foreign('publicateur')
			      ->references('id')
						->on('users')
						->onDelete('cascade');
    }  );  }

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
