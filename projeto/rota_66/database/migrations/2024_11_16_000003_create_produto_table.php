<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration {
    /**
    * Run the migrations.
    *
    * @return void
    */
    // up ensina como criar a tabela produto
    // http://laravel.com/docs/schema#adding-columns
    public function up()
    {
        Schema::create('produtos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nome');
            $table->decimal('valor', 5, 2);
            $table->string('descricao');
            $table->integer('quantidade');
            $table->timestamps();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    // douwn mostra como desfaze-la, rollback
    public function down()
    {
        Schema::drop('produtos');
    }
}