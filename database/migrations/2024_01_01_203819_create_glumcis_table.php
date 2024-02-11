<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlumciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('glumci', function (Blueprint $table) {
            $table->id();
            $table->string('ime')->nullable();
            $table->string('prezime')->nullable();
            $table->date('datum_rodenja');
            $table->string('drzava');
            $table->double('ocjena');
            $table->integer('nagrade');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function down()
    {
        Schema::dropIfExists('glumci');
    }
}