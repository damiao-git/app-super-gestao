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
        Schema::create("filiais", function (Blueprint $table) {
            $table->id();
            $table->string("filial");
            $table->timestamps();
        });

        Schema::create("produto_filiais", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("filial_id");
            $table->unsignedBigInteger("produto_id");
            $table->decimal("preco_venda");
            $table->integer("estoque_minimo");
            $table->integer("estoque_maximo");
            $table->timestamps();

            $table->foreign("filial_id")->references("id")->on("filiais");
            $table->foreign("produto_id")->references("id")->on("produtos");
        });

        Schema::table("produtos", function (Blueprint $table) {
            $table->dropColumn(["preco_venda","estoque_minimo", "estoque_maximo"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("produtos", function (Blueprint $table) {
            $table->integer("estoque_maximo");
            $table->integer("estoque_minimo");
            $table->decimal("preco_venda");
        });

        Schema::dropIfExists('produto_filiais');
        Schema::dropIfExists('filiais');
    }
};
