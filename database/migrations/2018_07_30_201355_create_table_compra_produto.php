<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCompraProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('compra_produto')) return;

        Schema::create('compra_produto', function (Blueprint $table) {

            $table->unsignedInteger('cod_compra');
            $table->unsignedInteger('cod_produto');

            $table->index('cod_compra', 'compra_produto_cod_compra_idx');
            $table->index('cod_produto', 'compra_produto_cod_produto_idx');

            $table->foreign('cod_compra', 'fk_compra_produto_cod_compra')
                ->references('comp_id')->on('compra');
            $table->foreign('cod_produto', 'fk_compra_produto_cod_produto')
                ->references('prod_id')->on('produto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra_produto');
    }
}
