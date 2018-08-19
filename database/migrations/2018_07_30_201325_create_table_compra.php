<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('compra')) return;

        Schema::create('compra', function(Blueprint $table){
            $table->increments('comp_id');
            $table->double('comp_valor_total');
            $table->date('comp_data_compra');
            $table->unsignedInteger('cod_fornecedor');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();

            $table->index('created_by', 'compra_created_by_idx');
            $table->index('updated_by', 'compra_updated_by_idx');
            $table->index('deleted_by', 'compra_deleted_by_idx');
            $table->index('cod_fornecedor', 'compra_cod_fornecedor_idx');

            $table->foreign('created_by', 'fk_compra_created_by')
                ->references('usua_id')->on('usuario');
            $table->foreign('updated_by', 'fk_compra_updated_by')
                ->references('usua_id')->on('usuario');
            $table->foreign('deleted_by', 'fk_compra_deleted_by')
                ->references('usua_id')->on('usuario');
            $table->foreign('cod_fornecedor', 'fk_compra_cod_fornecedor')
                ->references('forn_id')->on('fornecedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra');
    }
}
