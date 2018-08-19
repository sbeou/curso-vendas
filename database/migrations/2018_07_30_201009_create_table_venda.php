<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('venda')) return;

        Schema::create('venda', function(Blueprint $table){
            $table->increments('vend_id');
            $table->double('vend_valor_total');
            $table->unsignedInteger('cod_cliente');
            $table->timestamps();
            $table->softDeletes();
            $table->date('vend_data_venda');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();

            $table->index('created_by', 'venda_created_by_idx');
            $table->index('updated_by', 'venda_updated_by_idx');
            $table->index('deleted_by', 'venda_deleted_by_idx');
            $table->index('cod_cliente', 'venda_cod_cliente_idx');

            $table->foreign('created_by', 'fk_venda_created_by')
                ->references('usua_id')->on('usuario');
            $table->foreign('updated_by', 'fk_venda_updated_by')
                ->references('usua_id')->on('usuario');
            $table->foreign('deleted_by', 'fk_venda_deleted_by')
                ->references('usua_id')->on('usuario');
            $table->foreign('cod_cliente', 'fk_venda_cod_cliente')
                ->references('clie_id')->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venda');
    }
}
