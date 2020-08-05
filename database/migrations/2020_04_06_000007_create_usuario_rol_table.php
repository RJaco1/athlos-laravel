<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioRolTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'usuario_rol';

    /**
     * Run the migrations.
     * @table usuario_rol
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idusuariorol');
            $table->integer('idusuario')->unsigned();
            $table->integer('idrol')->unsigned();

            $table->index(["idrol"], 'idrol_idusuariorol_idx');

            $table->index(["idusuario"], 'idusuario_idusuariorol_idx');

            $table->foreign('idusuario', 'idusuario_idusuariorol_idx')
                ->references('idusuario')->on('usuario')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('idrol', 'idrol_idusuariorol_idx')
                ->references('idrol')->on('rol')
                ->onDelete('no action')
                ->onUpdate('no action');
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
