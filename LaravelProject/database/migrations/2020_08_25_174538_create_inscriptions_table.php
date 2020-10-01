<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('etudiant_id')->index();
            $table->foreign('etudiant_id')
            ->references('id')
            ->on('etudiants')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('cour_id')->index();
            $table->foreign('cour_id')
            ->references('id')
            ->on('cours')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('inscriptions');
    }
}
