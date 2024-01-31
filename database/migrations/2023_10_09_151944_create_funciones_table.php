<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
return new class extends Migration
{
    /**
     * Run the migrations 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_funcion');
            $table->string('nom_evento')->nullable();
            $table->integer('codificado');
            $table->timestamps();
        });
        DB::table('funciones')->insert([
            [
            'nom_funcion' => 'MAÑANA',
            'nom_evento' => 'FERCHO',      
            'codificado' => '02',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('funciones')->insert([
            [
            'nom_funcion' => 'TARDE',
            'nom_evento' => 'JUAN LUIS GUERRA',      
            'codificado' => '04',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('funciones')->insert([
            [
            'nom_funcion' => 'NOCHE',
            'nom_evento' => 'FERCHO',      
            'codificado' => '08',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funciones');
    }
};
