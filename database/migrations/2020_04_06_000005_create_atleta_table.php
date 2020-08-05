<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtletaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'atleta';

    /**
     * Run the migrations.
     * @table atleta
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idatleta');
            $table->string('nombre', 45);
            $table->string('apellido', 45);
            $table->string('genero', 45);
            $table->string('direccion', 45);
            $table->string('pais', 45);
            $table->string('dui')->unique();
            $table->string('email', 45)->unique();
            $table->string('fotoatleta', 85)->nullable();
            $table->integer('idusuario')->unsigned();
            $table->timestamps();

            $table->index(['idusuario'], 'idusuario_idatleta_idx');

            $table->foreign('idusuario', 'idusuario_idatleta_idx')
                ->references('idusuario')->on('usuario')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
