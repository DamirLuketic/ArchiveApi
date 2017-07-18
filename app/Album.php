<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'artist_id', 'media_type_id', 'condition_id', 'title', 'release_year', 'first_release_year', 'description',
		'private_note', 'barcode_number', 'cat', 'for_trade'
	];

	/**
	 * Connections
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function condition()
	{
		return $this->belongsTo('App\Condition');
	}

	public function artist()
	{
		return $this->belongsTo('App\Artist');
	}

	public function media_type()
	{
		return $this->belongsTo('App\MediaType');
	}

	public function images()
    {
        return $this->hasMany('App\Image');
    }
}
