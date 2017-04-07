<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiculesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicules', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nummoteur')->nullable();
			$table->string('numserie')->nullable();
			$table->string('marque')->nullable();
			$table->string('modele')->nullable();
			$table->date('annee')->nullable();
			$table->string('couleur')->nullable();
			$table->string('immatriculation')->nullable();
			$table->integer('proprietaire_id');
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
		Schema::drop('vehicules');
	}

}
