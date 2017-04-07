<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProprietairesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proprietaires', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nom', 191);
			$table->string('prenom', 191);
			$table->string('nif', 191)->unique();
			$table->string('adress', 191);
			$table->date('datenaissance')->nullable();
			$table->string('sexe', 191);
			$table->string('permisconduire', 191);
			$table->boolean('numero')->nullable();
			$table->string('rue', 191)->nullable();
			$table->string('commune_id', 191)->nullable();
			$table->string('telephone', 191)->nullable();
			$table->string('email', 191)->nullable();
			$table->text('memo', 65535)->nullable();
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
		Schema::drop('proprietaires');
	}

}
