<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');
            $table->string('stazione_di_partenza');
            $table->string('stazione_di_arrivo');
            $table->date('data_di_partenza');
            $table->date('data_di_arrivo');
            $table->dateTime('orario_di_partenza');
            $table->dateTime('orario_di_arrivo');
            $table->string('codice_treno');
            $table->tinyInteger('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('is_cancellato');
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
        Schema::dropIfExists('trains');
    }
}
