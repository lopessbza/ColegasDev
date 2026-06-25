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
        Schema::create('tbl_plano_servico', function (Blueprint $table) {
            $table->unsignedBigInteger('tbl_planos_id_plano');
            $table->unsignedBigInteger('tbl_servicos_id_servico');

            // Chaves Estrangeiras explicitadas
            $table->foreign('tbl_planos_id_plano')->references('id_plano')->on('tbl_planos')->onDelete('cascade');
            $table->foreign('tbl_servicos_id_servico')->references('id_servico')->on('tbl_servicos')->onDelete('cascade');

            // Chave primária composta
            $table->primary(['tbl_planos_id_plano', 'tbl_servicos_id_servico']);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_plano_servico');
    }
};
