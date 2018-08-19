<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('produto')) return;

        Schema::create('produto', function (Blueprint $table) {

            $table->increments('prod_id');
            $table->string('prod_nome');
            $table->double('prod_valor');
            $table->date('prod_data_validade');
            $table->integer('prod_quantidade');
            $table->unsignedInteger('cod_fornecedor');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();

            $table->index('cod_fornecedor', 'produto_cod_fornecedor_idx');
            $table->index('created_by', 'produto_created_by_idx');
            $table->index('updated_by', 'produto_updated_by_idx');
            $table->index('deleted_by', 'produto_deleted_by_idx');

            $table->foreign('cod_fornecedor', 'fk_produto_cod_fornecedor')
                ->references('forn_id')->on('fornecedor');
            $table->foreign('created_by', 'fk_produto_created_by')
                ->references('usua_id')->on('usuario');
            $table->foreign('updated_by', 'fk_produto_updated_by')
                ->references('usua_id')->on('usuario');
            $table->foreign('deleted_by', 'fk_produto_deleted_by')
                ->references('usua_id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedor');
    }
}
