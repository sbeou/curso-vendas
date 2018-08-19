<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableCompraProdutoAddColumnCompProQuantidade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('compra_produto', function(Blueprint $table)
        {
            $table->integer('comp_pro_quantidade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compra_produto', function(Blueprint $table)
        {
            $table->dropColumn('comp_pro_quantidade');
        });
    }
}
