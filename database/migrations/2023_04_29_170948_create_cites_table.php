<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cites', function (Blueprint $table) {
            $table->id();
            $table->string('num_cite')->nullable();
            $table->string('libelle')->nullable();
            $table->string('pseudo')->nullable();
            $table->string('num_agence')->nullable();
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
        Schema::dropIfExists('cites');
    }
}
