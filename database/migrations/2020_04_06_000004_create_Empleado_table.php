<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Empleado';

    /**
     * Run the migrations.
     * @table Empleado
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idempleado');
            $table->string('nombreemp', 45);
            $table->string('apellidoemp', 45);
            $table->string('genero', 45);
            $table->string('dui')->unique();
            $table->string('emailemp', 45)->unique();
            $table->string('fotoemp', 45)->nullable();
            $table->integer('idusuario')->unsigned();
            $table->timestamps();

            $table->index(['idusuario'], 'idempleado_idusuario_idx');

            $table->foreign('idusuario', 'idempleado_idusuario_idx')
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
