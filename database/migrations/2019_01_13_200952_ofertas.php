<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ofertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('titol',32);
            $table->string('nombre_empresa',30);
            $table->text('descripcio');
            $table->string('provincia',32);
            $table->string('tipocontrato',32);
            $table->string('duracion',32);
            $table->string('jornada',32);
            $table->float('salario')->default(0);
            $table->text('requisitos');
            
            //$table->String('imagen',255)->default('images/nuncis/nuncidefault.jpg');
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
        Schema::dropIfExists('ofertas');    }
}
