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
        Schema::create('tbl_assinaturas', function (Blueprint $table) {
            $table->id('id_assinatura');
            $table->string('status_assinatura')->nullable();
            $table->date('data_inicio')->nullable();

            // Defina como nullable() para engolir o dump sem erros de integridade temporários
            $table->unsignedBigInteger('tbl_clientes_id_cliente')->nullable();
            $table->unsignedBigInteger('tbl_precos_id_preco')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_assinaturas');
    }
};
