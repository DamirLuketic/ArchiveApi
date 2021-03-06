<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable =
		[
			'name'
		];

	/**
	 * Connections
	 */
	public function albums()
	{
		return $this->hasMany('App\Album');
	}
}
