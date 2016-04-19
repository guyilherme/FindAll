<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLojistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lojistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nome_Fantasia', 200);
            $table->string('Razao_Social', 200);
            $table->text('Logradouro');
            $table->string('Bairro', 50);
            $table->string('CEP', 9);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lojistas');
    }
}
