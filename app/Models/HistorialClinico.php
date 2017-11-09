<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 16 May 2017 14:51:50 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class HistorialClinico
 * 
 * @property int $H_id
 * @property string $Enfermedades
 * @property string $Controladas
 * @property string $B_Medicacion
 * @property string $Medicamentos
 * @property string $D_Normal
 * @property string $A_Sueño
 * @property string $E_Facil
 * @property string $Claustrofobia
 * @property int $paciente_Id_Pac
 * 
 * @property \App\Models\Paciente $paciente
 *
 * @package App\Models
 */
class HistorialClinico extends Eloquent
{
	protected $table = 'historial_clinico';
	public $timestamps = false;

	protected $casts = [
		'paciente_Id_Pac' => 'int'
	];

	protected $fillable = [
		'Enfermedades',
		'Controladas',
		'B_Medicacion',
		'Medicamentos',
		'D_Normal',
		'A_Sueño',
		'E_Facil',
		'Claustrofobia'
	];

	public function paciente()
	{
		return $this->belongsTo(\App\Models\Paciente::class, 'paciente_Id_Pac');
	}
}
