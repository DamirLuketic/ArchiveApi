<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaType extends Model
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
