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
        Schema::create('RatioTipo', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('idTipoEmpresa');
            $table->foreign('idTipoEmpresa')->references('id')->on('TipoEmpresa')->onDelete('cascade');
            $table->integer('idRatio');
            $table->foreign('idRatio')->references('id')->on('Ratio')->onDelete('cascade');
            $table->decimal('valorRatioTipo', $precision = 12, $scale = 2);
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
        Schema::dropIfExists('RatioTipo');
    }
};
