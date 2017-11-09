<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 13 Mar 2017 16:03:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class HistorialClinico
 * 
 * @property int $H_id
 * @property int $Id_Pac
 * @property string $Enfermedades
 * @property string $Controladas
 * @property string $B_Medicacion
 * @property string $Medicamentos
 * @property string $D_Normal
 * @property string $A_Sueño
 * @property string $E_Facil
 * @property string $Claustrofobia
 *
 * @package App\Models
 */
class HistorialClinico extends Eloquent
{
	protected $table = 'Historial_Clinico';
	protected $primaryKey = 'H_id';
	public $timestamps = false;

	protected $casts = [
		'Id_Pac' => 'int'
	];

	protected $fillable = [
		'Id_Pac',
		'Enfermedades',
		'Controladas',
		'B_Medicacion',
		'Medicamentos',
		'D_Normal',
		'A_Sueño',
		'E_Facil',
		'Claustrofobia'
	];
}
