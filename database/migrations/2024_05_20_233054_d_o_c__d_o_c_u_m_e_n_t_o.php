<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('DOC_DOCUMENTO', function (Blueprint $table) {
            $table->bigIncrements('DOC_ID');
            $table->string('DOC_NOMBRE');
            $table->string('DOC_CODIGO');
            $table->string('DOC_CONTENIDO');
            $table->unsignedBigInteger('DOC_ID_TIPO');
            $table->unsignedBigInteger('DOC_ID_PROCESO');
            $table->foreign('DOC_ID_TIPO')->references('TIP_ID')->on('TIP_TIPO_DOC');
            $table->foreign('DOC_ID_PROCESO')->references('PRO_ID')->on('PRO_PROCESO');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
