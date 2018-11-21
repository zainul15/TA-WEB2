<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelPtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pts', function (Blueprint $table) {
           $table->increments('id');
			$table->string('instansi');	
			$table->string('jalur');
			$table->integer('biaya');
			$table->date('registrasi');
            $table->date('tes');
            $table->date('pengumuman');
			$table->date('daftarulang');
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
        Schema::dropIfExists('model_pts');
    }
}
