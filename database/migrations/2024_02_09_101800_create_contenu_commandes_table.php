<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up()
    {
        Schema::create('contenu_commandes', function (Blueprint $table) {
            $table->unsignedBigInteger('Num_cmd');
            $table->foreign('Num_cmd')->references('Num_cmd')->on('commandes');
            $table->unsignedBigInteger('Code_art');
            $table->foreign('Code_art')->references('Code_art')->on('articles');
            $table->integer('Qte_cmd');
            $table->primary(['Num_cmd', 'Code_art']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contenu_commandes');
    }
};
