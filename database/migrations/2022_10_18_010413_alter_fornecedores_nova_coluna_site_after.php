<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criando campo site
        Schema::table('fornecedores', function(Blueprint $table){
            $table->string('site', 100)->after('nome')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //excluindo campo
        Schema::table('fornecedores', function(Blueprint $table){
            $table->dropColumn('site');
        });   

    }
};
