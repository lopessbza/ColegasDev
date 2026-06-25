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
        Schema::create('tbl_servicos', function (Blueprint $table) {
            $table->id('id_servico');
            $table->string('nome_servico');
            $table->text('descricao_servico')->nullable();
            // REMOVA A LINHA DA IMAGEM DAQUI! O arquivo .sql vai criá-la sozinho na linha 93.
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_servicos');
    }
};
