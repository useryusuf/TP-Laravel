<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up()
    {
        Schema::create('ligne_livraisons', function (Blueprint $table) {
            $table->id('Num_lig_liv');
            $table->unsignedBigInteger('Code_art');
            $table->foreign('Code_art')->references('Code_art')->on('articles');
            $table->integer('Qte_liv');
            $table->unsignedBigInteger('Num_liv');
            $table->foreign('Num_liv')->references('Num_liv')->on('livraisons');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ligne_livraisons');
    }
};
