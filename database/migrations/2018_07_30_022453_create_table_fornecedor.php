<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFornecedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('fornecedor')) return;
        
        Schema::create('fornecedor',function(Blueprint $table){
            $table->increments('forn_id');
            $table->string('forn_razao_social');
            $table->string('forn_cnpj',20);
            $table->unique('forn_cnpj');
            $table->string('forn_email',100);
            $table->string('forn_telefone',20);
            $table->string('forn_endereco');
            $table->string('forn_cidade',100);
            $table->string('forn_estado',100);
            $table->string('forn_nome_contato',100);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();

            $table->index('created_by', 'fornecedor_created_by_idx');
            $table->index('updated_by', 'fornecedor_updated_by_idx');
            $table->index('deleted_by', 'fornecedor_deleted_by_idx');

            $table->foreign('created_by', 'fk_fornecedor_created_by')
                ->references('usua_id')->on('usuario');
            $table->foreign('updated_by', 'fk_fornecedor_updated_by')
                ->references('usua_id')->on('usuario');
            $table->foreign('deleted_by', 'fk_fornecedor_deleted_by')
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
