<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('azienda', 15);
            $table->string('stazione_di_partenza', 100);
            $table->string('stazione_di_arrivo', 100);
            $table->float('orario_di_partenza', 24, 2);
            $table->string('orario_di_arrivo', 24, 2);
            $table->float('codice_treno', 100);
            $table->float('numero_carrozze', 9);
            $table->boolean('in_orario');
            $table->boolean('cancellato');
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
};
