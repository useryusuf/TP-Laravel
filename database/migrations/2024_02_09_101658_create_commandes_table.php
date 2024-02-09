<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id('Num_cmd');
            $table->date('Date_cmd');
            $table->unsignedBigInteger('Code_cli');
            $table->foreign('Code_cli')->references('Code_cli')->on('clients');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('commandes');
    }
};
