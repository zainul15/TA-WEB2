<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelPtnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptn', function (Blueprint $table) {
            $table->increments('id');
			$table->string('namaujian');	
			$table->date('pendaftaran');
			$table->date('penutupan');
            $table->date('tanggalujian');
            $table->date('pengumuman');
			$table->string('penyelenggara');
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
        Schema::dropIfExists('model_ptns');
    }
}
