<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->double('note');
            
            $table->unsignedBigInteger('etudiant_id');
            $table->foreign('etudiant_id')
            ->references('id')
            ->on('etudiants')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('examen_id');
            $table->foreign('examen_id')
            ->references('id')
            ->on('examens')
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
        Schema::dropIfExists('evaluations');
    }
}
