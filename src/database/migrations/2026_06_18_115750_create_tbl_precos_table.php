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
        Schema::create('tbl_precos', function (Blueprint $table) {
            $table->id('id_preco');
            $table->string('tipo_periodo_preco')->nullable(); // Trata o ENUM como string
            $table->decimal('valor_preco', 10, 2);

            // Relacionamento com Planos
            $table->unsignedBigInteger('tbl_planos_id_plano');
            $table->foreign('tbl_planos_id_plano')->references('id_plano')->on('tbl_planos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_precos');
    }
};
