<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_baterai');
            $table->text('alamat')->nullable(   );
            $table->string('latitude',30);
            $table->string('longitude',30);
            $table->enum('status_wilatah',['on grid','bad grid','off grid']);
            $table->foreign('id_baterai')->references('id')->on('baterries')->onDelete('cascade');
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
        Schema::dropIfExists('lokasis');
    }
}
