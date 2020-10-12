<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaterriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baterries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produsen');
            $table->unsignedBigInteger('id_alat');
            $table->unsignedBigInteger('id_client');
            $table->string('tingkat_baterai',50);
            $table->float('suhu',8,2);
            $table->integer('jumlah_sell');
            $table->string('type',20)->nullable();
            $table->string('merk',20)->nullable();
            $table->foreign('id_produsen')->references('id')->on('produsens')->onDelete('cascade');
            $table->foreign('id_alat')->references('id')->on('alats')->onDelete('cascade');
            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade');
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
        Schema::dropIfExists('baterries');
    }
}
