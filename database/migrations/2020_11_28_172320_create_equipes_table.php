<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipesTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {

            $table->id();
            $table->string('coach');
            $table->string("equipe");
            $table->string("ville")->nullable();
            $table->integer('nombres')->nullable();
            $table->integer('membres');
            $table->unsignedBigInteger('pays_id')->nullable();
            $table->foreign('pays_id')->references('id')->on('pays')->onDelete('cascade');        
            $table->timestamps();
            
        });

    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipes');
    }
}