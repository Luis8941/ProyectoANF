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
        Schema::create('CatalogoPeriodo', function (Blueprint $table) {
            $table->increments('idCP');
            $table->unsignedBigInteger('idCatalogo');
            $table->foreign('idCatalogo')->references('idCatalogo')->on('Catalogo')->onDelete('cascade');
            $table->unsignedBigInteger('idPC');
            $table->foreign('idPC')->references('idPC')->on('PeriodoContable')->onDelete('cascade');
            $table->decimal('saldo', $precision = 12, $scale = 2);
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
        Schema::dropIfExists('CatalogoPeriodo');
    }
};
