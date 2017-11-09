<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 May 2017 14:51:50 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AntecedenteEntrevistum
 * 
 * @property int $Id_AntE
 * @property string $Entrevistador
 * @property \Carbon\Carbon $Fecha_Act
 * @property string $Lugar
 * @property int $Firma
 * @property string $Observaciones
 * @property int $users_id
 * @property int $paciente_Id_Pac
 * 
 * @property \App\Models\Paciente $paciente
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class AntecedenteEntrevistum extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'Firma' => 'int',
		'users_id' => 'int',
		'paciente_Id_Pac' => 'int'
	];

	protected $dates = [
		'Fecha_Act'
	];

	protected $fillable = [
		'Entrevistador',
		'Fecha_Act',
		'Lugar',
		'Firma',
		'Observaciones',
		'users_id'
	];

	public function paciente()
	{
		return $this->belongsTo(\App\Models\Paciente::class, 'paciente_Id_Pac');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'users_id');
	}
}
