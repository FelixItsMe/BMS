<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdusensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produsens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan',50);
            $table->string('asal_negara',20)->nullable();
            $table->string('phone_number',20);
            $table->string('website',30)->nullable();
            $table->string('email',30)->unique();
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
        Schema::dropIfExists('produsens');
    }
}
