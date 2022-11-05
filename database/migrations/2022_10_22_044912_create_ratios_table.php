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
            $table->increments('id');
            $table->unsignedInteger('idEmpresa');
            $table->string('nombreRatio');
            $table->decimal('valorGeneralRatio', $precision = 12, $scale = 2);
            $table->timestamps();
            $table->foreign('idEmpresa')->references('id')->on('Empresa');
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
