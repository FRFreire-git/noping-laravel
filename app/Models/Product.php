<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $BAR_CODE
 * @property string|null $CNPJ
 * @property string|null $TITLE
 * @property Carbon|null $RELEASE_DT
 * @property string|null $COVER
 * @property float|null $PRICE
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'product';
	protected $primaryKey = 'BAR_CODE';
	public $incrementing = false;
	public $timestamps = true;

	protected $casts = [
		'BAR_CODE' => 'int',
		'PRICE' => 'float'
	];

	protected $dates = [
		'RELEASE_DT'
	];

	protected $fillable = [
		'CNPJ',
		'TITLE',
		'RELEASE_DT',
		'COVER',
		'PRICE',
		'CREATED_AT',
		'UPDATED_AT',
		'DELETED_AT'
	];
}
