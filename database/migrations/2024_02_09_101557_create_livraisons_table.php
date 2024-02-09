<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id('Num_liv');
            $table->unsignedBigInteger('Code_four');
            $table->foreign('Code_four')->references('Code_four')->on('fournisseurs');
            $table->date('Date_liv');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('livraisons');
    }
};
