<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 May 2017 14:51:50 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Registro
 * 
 * @property int $Id
 * @property \Carbon\Carbon $F_Nat
 * @property string $L_Nat
 * @property string $E_Civil
 * @property int $Edad
 * @property string $Escolaridad
 * @property string $Ocupacion
 * @property string $C_Vive
 * @property string $Vivienda
 * @property int $I_Mensual
 * @property string $N_Conyuge
 * @property string $N_Hijos
 * @property string $N_V_Personal
 * @property string $E_Aerobicos
 * @property int $paciente_Id_Pac
 * 
 * @property \App\Models\Paciente $paciente
 *
 * @package App\Models
 */
class Registro extends Eloquent
{
	protected $table = 'registro';
	public $timestamps = false;

	protected $casts = [
		'Edad' => 'int',
		'I_Mensual' => 'int',
		'paciente_Id_Pac' => 'int'
	];

	protected $dates = [
		'F_Nat'
	];

	protected $fillable = [
		'F_Nat',
		'L_Nat',
		'E_Civil',
		'Edad',
		'Escolaridad',
		'Ocupacion',
		'C_Vive',
		'Vivienda',
		'I_Mensual',
		'N_Conyuge',
		'N_Hijos',
		'N_V_Personal',
		'E_Aerobicos'
	];

	public function paciente()
	{
		return $this->belongsTo(\App\Models\Paciente::class, 'paciente_Id_Pac');
	}
}
