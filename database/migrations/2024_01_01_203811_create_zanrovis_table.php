<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZanroviiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('zanrovi', function (Blueprint $table) {
            $table->id();
            $table->string('naziv')->nullable();
            $table->double('popularnost');
            $table->integer('glumci');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function down()
    {
        Schema::dropIfExists('zanrovi');
    }
}