<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 May 2017 14:51:50 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AntecedentesFamiliare
 * 
 * @property int $AF_Id
 * @property string $Anemia
 * @property string $Diabetes
 * @property string $H_colesterol
 * @property string $Hipertension
 * @property string $Hipertiroidismo
 * @property string $Sustancia
 * @property string $DD_Cognitivo
 * @property int $paciente_Id_Pac
 * 
 * @property \App\Models\Paciente $paciente
 *
 * @package App\Models
 */
class AntecedentesFamiliare extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'paciente_Id_Pac' => 'int'
	];

	protected $fillable = [
		'Anemia',
		'Diabetes',
		'H_colesterol',
		'Hipertension',
		'Hipertiroidismo',
		'Sustancia',
		'DD_Cognitivo'
	];

	public function paciente()
	{
		return $this->belongsTo(\App\Models\Paciente::class, 'paciente_Id_Pac');
	}
}
