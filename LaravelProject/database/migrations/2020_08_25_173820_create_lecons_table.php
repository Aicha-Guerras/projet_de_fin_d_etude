<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('titre_ressource');
            $table->string('titre_lecon');
            $table->string('contenu');

            $table->unsignedBigInteger('cour_id');
            $table->foreign('cour_id')
            ->references('id')
            ->on('cours')
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
        Schema::dropIfExists('lecons');
    }
}
