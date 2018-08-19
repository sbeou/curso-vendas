<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVendaProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('venda_produ')) return;

        Schema::create('venda_produto', function(Blueprint $table){
            $table->unsignedInteger('cod_venda');
            $table->unsignedInteger('cod_produto');

            $table->index('cod_venda', 'venda_produto_cod_venda_idx');
            $table->index('cod_produto', 'venda_produto_cod_produto_idx');

            $table->foreign('cod_venda', 'fk_venda_produto_cod_venda')
                ->references('vend_id')->on('venda');
            $table->foreign('cod_produto', 'fk_venda_produto_cod_produto')
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
        Schema::dropIfExists('venda_compra');
    }
}
