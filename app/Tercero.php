<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model {

	protected $table = 'terceros';

	protected $fillable = [

	'nit','nomre','rol','direccion','telefono','email','notas'
	];

}
