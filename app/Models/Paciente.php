<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 May 2017 14:51:50 +0000.
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
 * @property \Illuminate\Database\Eloquent\Collection $antecedente_entrevista
 * @property \Illuminate\Database\Eloquent\Collection $antecedentes_familiares
 * @property \Illuminate\Database\Eloquent\Collection $historial_clinicos
 * @property \Illuminate\Database\Eloquent\Collection $registros
 *
 * @package App\Models
 */
class Paciente extends Eloquent
{
	protected $table = 'paciente';
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

	public function antecedente_entrevista()
	{
		return $this->hasMany(\App\Models\AntecedenteEntrevistum::class, 'paciente_Id_Pac');
	}

	public function antecedentes_familiares()
	{
		return $this->hasMany(\App\Models\AntecedentesFamiliare::class, 'paciente_Id_Pac');
	}

	public function historial_clinicos()
	{
		return $this->hasMany(\App\Models\HistorialClinico::class, 'paciente_Id_Pac');
	}

	public function registros()
	{
		return $this->hasMany(\App\Models\Registro::class, 'paciente_Id_Pac');
	}
}
