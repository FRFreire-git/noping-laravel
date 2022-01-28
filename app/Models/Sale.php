<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 * 
 * @property string $CPF
 * @property string|null $BAR_CODE
 * @property Carbon|null $DT_SALE
 *
 * @package App\Models
 */
class Sale extends Model
{
	protected $table = 'sale';
	protected $primaryKey = 'CPF';
	public $incrementing = false;
	public $timestamps = true;

	protected $dates = [
		'DT_SALE'
	];

	protected $fillable = [
		'BAR_CODE',
		'DT_SALE',
		'CREATED_AT',
		'UPDATED_AT',
		'DELETED_AT'
	];
}
