<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'inscripcion';

    /**
     * Run the migrations.
     * @table inscripcion
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idinscripcion');
            $table->integer('idevento')->nullable()->unsigned();
            $table->integer('idatleta')->unsigned();
            $table->integer('idhistorial')->nullable()->unsigned();
            $table->timestamps();

            $table->index(["idatleta"], 'idatleta_idx');

            $table->index(["idevento"], 'idevento_idx');

            $table->index(["idhistorial"], 'idhistorial_idx');


            $table->foreign('idatleta', 'idatleta_idx')
                ->references('idatleta')->on('atleta')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('idevento', 'idevento_idx')
                ->references('idevento')->on('evento')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('idhistorial', 'idhistorial_idx')
                ->references('idhistorial')->on('historial')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
