<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConducteursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conducteurs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nif');
			$table->string('nom');
			$table->string('prenom')->nullable();
			$table->date('datenaissance')->nullable();
			$table->string('lieunaissance')->nullable();
			$table->string('sexe')->nullable();
			$table->string('cin')->nullable();
			$table->string('permisconduire')->nullable();
			$table->string('matricule')->nullable();
			$table->boolean('numero')->nullable();
			$table->string('rue')->nullable();
			$table->string('quartier')->nullable();
			$table->integer('commune_id')->nullable();
			$table->string('telephone')->nullable();
			$table->string('photo')->nullable();
			$table->text('empreinte_droite', 65535)->nullable();
			$table->text('empreint_gauche', 65535)->nullable();
			$table->integer('proprietaire_id');
			$table->integer('station_id')->nullable();
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
		Schema::drop('conducteurs');
	}

}
