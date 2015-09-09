<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlquilersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alquilers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('test2s_id')->unsigned();
			$table->integer('tercero_id')->unsigned();
			$table->date('fecha');
			$table->enum('estado',['alquilado','devuelto']);
			$table->string('notas',1000);


			$table->timestamps();

			$table->foreign('test2s_id')
			->references('id')->on('test2s')
			->onUpdate('CASCADE')
			->onDelete('CASCADE');

			$table->foreign('tercero_id')
			->references('id')->on('terceros')
			->onUpdate('CASCADE')
			->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alquilers');
	}

}
