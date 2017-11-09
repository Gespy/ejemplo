<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 13 Mar 2017 16:03:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Registro
 * 
 * @property int $Id_Paciente
 * @property int $Fk_Idpac
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
 *
 * @package App\Models
 */
class Registro extends Eloquent
{
	protected $table = 'Registro';
	protected $primaryKey = 'Id_Paciente';
	public $timestamps = false;

	protected $casts = [
		'Fk_Idpac' => 'int',
		'Edad' => 'int',
		'I_Mensual' => 'int'
	];

	protected $dates = [
		'F_Nat'
	];

	protected $fillable = [
		'Fk_Idpac',
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
}
