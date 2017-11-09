<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 13 Mar 2017 16:03:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Paciente
 * 
 * @property int $Id_Pac
 * @property string $Nombre
 * @property string $Direccion
 * @property int $Tel_Fijo
 * @property int $Tel_Cel
 * @property string $E_mail
 *
 * @package App\Models
 */
class Paciente extends Eloquent
{
	protected $table = 'Paciente';
	protected $primaryKey = 'Id_Pac';
	public $timestamps = false;

	protected $casts = [
		'Tel_Fijo' => 'int',
		'Tel_Cel' => 'int'
	];

	protected $fillable = [
		'Nombre',
		'Direccion',
		'Tel_Fijo',
		'Tel_Cel',
		'E_mail'
	];
}
