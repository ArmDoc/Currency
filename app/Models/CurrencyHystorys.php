<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrencyHystorys extends Model
{
    use HasFactory;

	 protected $fillable = [
		'id',
		'currencys_id',
		'value',
	];
}
