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
            $table->increments('id');
            $table->string('codigo');
            $table->string('nombreCuenta');
            $table->unsignedInteger('idTipoCatalogo');
            $table->foreign('idTipoCatalogo')->references('id')->on('Tipocatalogo');
            $table->unsignedInteger('idEmpresa');
            $table->foreign('idEmpresa')->references('id')->on('Empresa');
            $table->unsignedInteger('idCuentaPuente');
            $table->foreign('idCuentaPuente')->references('id')->on('Cuentapuente');
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
