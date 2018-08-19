<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableVendaProdutoAddColumnVendProQuantidade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('venda_produto', function(Blueprint $table)
        {
            $table->integer('vend_pro_quantidade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('venda_produto', function(Blueprint $table)
        {
            $table->dropColumn('vend_pro_quantidade');
        });
    }
}
