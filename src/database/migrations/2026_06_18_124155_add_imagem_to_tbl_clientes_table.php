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
        Schema::table('tbl_clientes', function (Blueprint $table) {
            // Adiciona a coluna da foto/imagem
            $table->string('imagem_cliente')->nullable()->after('email_cliente');
        });
    }

    public function down(): void
    {
        Schema::table('tbl_clientes', function (Blueprint $table) {
            // Remove a coluna se fizermos um rollback
            $table->dropColumn('imagem_cliente');
        });
    }
};
