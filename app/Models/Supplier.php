<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Supplier
 * 
 * @property string $CNPJ
 * @property string|null $NAME
 * @property string|null $EMAIL
 * @property string|null $LOGO
 *
 * @package App\Models
 */
class Supplier extends Model
{
	protected $table = 'supplier';
	protected $primaryKey = 'CNPJ';
	public $incrementing = false;
	public $timestamps = true;

	protected $fillable = [
		'NAME',
		'EMAIL',
		'LOGO',
		'CREATED_AT',
		'UPDATED_AT',
		'DELETED_AT'
	];
}
