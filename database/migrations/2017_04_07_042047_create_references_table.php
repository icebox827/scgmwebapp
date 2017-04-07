<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('references', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nom')->nullable();
			$table->string('prenom')->nullable();
			$table->boolean('numero')->nullable();
			$table->string('rue')->nullable();
			$table->string('quartier')->nullable();
			$table->integer('commune_id');
			$table->string('telephone')->nullable();
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
		Schema::drop('references');
	}

}
