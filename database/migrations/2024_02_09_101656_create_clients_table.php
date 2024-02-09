<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('Code_cli');
            $table->string('Nom_cli');
            $table->string('Pre_cli');
            $table->integer('Age_cli');
            $table->string('Adr_cli');
            $table->string('Vil_cli');
            $table->string('Tel_cli');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
