<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property string $CPF
 * @property string|null $NAME
 * @property Carbon|null $DT_BIRTH
 * @property string|null $SEX
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'client';
	protected $primaryKey = 'CPF';
	public $incrementing = false;
	public $timestamps = true;

	protected $dates = [
		'DT_BIRTH'
	];

	protected $fillable = [
		'NAME',
		'DT_BIRTH',
		'SEX',
		'CREATED_AT',
		'UPDATED_AT',
		'DELETED_AT'
	];
}
