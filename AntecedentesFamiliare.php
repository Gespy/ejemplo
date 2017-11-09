<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 13 Mar 2017 16:03:20 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AntecedentesFamiliare
 * 
 * @property int $AF_Id
 * @property int $Id_Pac
 * @property string $Anemia
 * @property string $Diabetes
 * @property string $H_colesterol
 * @property string $Hipertension
 * @property string $Hipertiroidismo
 * @property string $Sustancia
 * @property string $DD_Cognitivo
 *
 * @package App\Models
 */
class AntecedentesFamiliare extends Eloquent
{
	protected $primaryKey = 'AF_Id';
	public $timestamps = false;

	protected $casts = [
		'Id_Pac' => 'int'
	];

	protected $fillable = [
		'Id_Pac',
		'Anemia',
		'Diabetes',
		'H_colesterol',
		'Hipertension',
		'Hipertiroidismo',
		'Sustancia',
		'DD_Cognitivo'
	];
}
