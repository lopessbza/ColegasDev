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
        Schema::table('tbl_usuarios', function (Blueprint $table) {
            // Adiciona a coluna da foto/imagem
            $table->string('imagem_usuario')->nullable()->after('cargo_usuario');
        });
    }

    public function down(): void
    {
        Schema::table('tbl_usuarios', function (Blueprint $table) {
            // Remove a coluna se fizermos um rollback
            $table->dropColumn('imagem_usuario');
        });
    }
};
