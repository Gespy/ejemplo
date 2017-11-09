<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 13 Mar 2017 16:03:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Usr
 * 
 * @property int $ID_usr
 * @property string $Nombre_usr
 * @property string $Apellido_mat_usr
 * @property string $Apellido_pat_usr
 * @property \Carbon\Carbon $Fecha_de_Nacimiento_usr
 *
 * @package App\Models
 */
class Usr extends Eloquent
{
	protected $table = 'usr';
	protected $primaryKey = 'ID_usr';
	public $timestamps = false;

	protected $dates = [
		'Fecha_de_Nacimiento_usr'
	];

	protected $fillable = [
		'Nombre_usr',
		'Apellido_mat_usr',
		'Apellido_pat_usr',
		'Fecha_de_Nacimiento_usr'
	];
}
