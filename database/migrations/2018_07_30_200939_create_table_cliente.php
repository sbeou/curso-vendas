<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('cliente')) return;
        
        Schema::create('cliente', function(Blueprint $table){
            $table->increments('clie_id');
            $table->string('clie_nome');
            $table->string('clie_cpf',14);
            $table->string('clie_telefone',100);
            $table->string('clie_endereco');
            $table->string('clie_cidade',100);
            $table->string('clie_estado',100);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();

            $table->index('created_by', 'cliente_created_by_idx');
            $table->index('updated_by', 'cliente_updated_by_idx');
            $table->index('deleted_by', 'cliente_deleted_by_idx');

            $table->foreign('created_by', 'fk_cliente_created_by')
                ->references('usua_id')->on('usuario');
            $table->foreign('updated_by', 'fk_cliente_updated_by')
                ->references('usua_id')->on('usuario');
            $table->foreign('deleted_by', 'fk_cliente_deleted_by')
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
        Schema::dropIfExists('cliente');
    }
}
