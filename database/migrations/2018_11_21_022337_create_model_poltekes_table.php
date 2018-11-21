<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelPoltekesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poltekes', function (Blueprint $table) {
            $table->increments('id');
			$table->string('a');
            $table->date('b');
            $table->date('c');
            $table->date('d');
            $table->date('e');
            $table->integer('f');
			 
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
        Schema::dropIfExists('model_poltekes');
    }
}
