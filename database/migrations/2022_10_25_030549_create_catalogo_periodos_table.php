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
            $table->increments('id');
            $table->unsignedInteger('idCatalogo');
            $table->unsignedInteger('idPC');
            $table->decimal('saldo', $precision = 12, $scale = 2);
            $table->timestamps();
            $table->foreign('idCatalogo')->references('id')->on('Catalogo')->onDelete('cascade');
            $table->foreign('idPC')->references('id')->on('PeriodoContable')->onDelete('cascade');
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
