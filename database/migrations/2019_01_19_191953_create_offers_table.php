<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title',32);
                $table->text('description');
                $table->text('requirements');
                $table->string('tipocontrato',32);
                $table->string('duration',32);
                $table->string('working_day',32);
                $table->date('creation_date');
                $table->float('salary')->default(0);
                $table->String('image',255)->default('img/ofertas/telefono.jpg');
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
            Schema::dropIfExists('offers');    }
    }