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
        Schema::create('Ratio', function (Blueprint $table) {
            $table->increments('idRatio');
            $table->unsignedBigInteger('idEmpresa');
            $table->foreign('idEmpresa')->references('idEmpresa')->on('Empresa');
            $table->string('nombreRatio');
            $table->decimal('valorGeneralRatio', $precision = 12, $scale = 2);
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
        Schema::dropIfExists('Ratio');
    }
};
