<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProprietairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nom");
            $table->string("prenom");
            $table->string("nif")->unique();
            $table->string("adress");
            $table->date("dateNaissance");
            $table->string("sexe");
            $table->string("permisConduire");
            $table->tinyInteger("numero")->nullable();
            $table->string("rue")->nullable();
            $table->string("commune")->nullable();
            $table->string("departement")->nullable();
            $table->string("telephone")->nullable();
            $table->string("email")->nullable();
            $table->text("memo")->nullable();
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
        Schema::dropIfExists('proprietaires');
    }
}
