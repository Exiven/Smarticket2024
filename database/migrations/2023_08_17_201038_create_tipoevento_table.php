<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoevento', function (Blueprint $table) {
            $table->id();
            $table->string('des_evento')->nullable();
            $table->integer('est_evento');
            $table->timestamps();
        });
        DB::table('tipoevento')->insert([
            [/*'id' => 1,*/
            'des_evento' => 'FESTIVAL',
            'est_evento' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('tipoevento')->insert([
            [/*'id' => 1,*/
            'des_evento' => 'CONGRESO',
            'est_evento' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('tipoevento')->insert([
            [/*'id' => 1,*/
            'des_evento' => 'FERIAS',
            'est_evento' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('tipoevento')->insert([
            [/*'id' => 1,*/
            'des_evento' => 'CONCIERTOS',
            'est_evento' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('tipoevento')->insert([
            [/*'id' => 1,*/
            'des_evento' => 'REUNION',
            'est_evento' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('tipoevento')->insert([
            [/*'id' => 1,*/
            'des_evento' => 'CUMPLEAÑOS',
            'est_evento' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('tipoevento')->insert([
            [/*'id' => 1,*/
            'des_evento' => 'DEPORTIVO',
            'est_evento' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        ]);
        DB::table('tipoevento')->insert([
            [/*'id' => 1,*/
            'des_evento' => 'PRIVADO',
            'est_evento' => 1,
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
        Schema::dropIfExists('tipoevento');
    }
};
