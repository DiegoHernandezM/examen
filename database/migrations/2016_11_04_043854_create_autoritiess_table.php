<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoritiessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('autoridades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->string('ap_paterno',255);
            $table->string('ap_materno',255);
            $table->string('email')->unique();
            $table->integer('dependencia_id')->unsigned();
            $table->foreign('dependencia_id')
                  ->references('id')
                  ->on('dependencias')
                  ->onDelete('cascade');
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
         Schema::dropIfExists('autoridades');
    }
}
