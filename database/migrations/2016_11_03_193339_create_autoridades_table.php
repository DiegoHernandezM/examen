<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoridadesTable extends Migration
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
            $table->string('name');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('nacimiento');
            $table->string('email')->unique();
            $table->foreign('dependencias_id')
                  ->references('id')
                  ->on('dependencias')
                  ->onDelete('cascade'); 
            $table->string('uuid',255); 
                  

            //$table->timestamps();
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
