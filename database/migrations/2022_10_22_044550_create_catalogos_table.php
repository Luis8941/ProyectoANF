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
        Schema::create('Catalogo', function (Blueprint $table) {
            $table->increments('idCatalogo');
            $table->string('nombreCuenta');
            $table->unsignedBigInteger('idTipoCatalogo');
            $table->foreign('idTipoCatalogo')->references('idTipoCatalogo')->on('TipoCatalogo');
            $table->unsignedBigInteger('idEmpresa');
            $table->foreign('idEmpresa')->references('idEmpresa')->on('Empresa');
            $table->unsignedBigInteger('idCuentaPuente');
            $table->foreign('idCuentaPuente')->references('idCuentaPuente')->on('CuentaPuente');
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
        Schema::dropIfExists('Catalogo');
    }
};
