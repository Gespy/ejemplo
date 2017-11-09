<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 13 Mar 2017 16:03:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AntecedenteEntrevistum
 * 
 * @property int $Id_AntE
 * @property int $Fk_User
 * @property int $Id_Pac
 * @property string $Entrevistador
 * @property \Carbon\Carbon $Fecha_Act
 * @property string $Lugar
 * @property int $Firma
 * @property string $Observaciones
 *
 * @package App\Models
 */
class AntecedenteEntrevistum extends Eloquent
{
	protected $primaryKey = 'Id_AntE';
	public $timestamps = false;

	protected $casts = [
		'Fk_User' => 'int',
		'Id_Pac' => 'int',
		'Firma' => 'int'
	];

	protected $dates = [
		'Fecha_Act'
	];

	protected $fillable = [
		'Fk_User',
		'Id_Pac',
		'Entrevistador',
		'Fecha_Act',
		'Lugar',
		'Firma',
		'Observaciones'
	];
}
