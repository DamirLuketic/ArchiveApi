<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'album_id', 'path',
    ];

    /**
     * Connections
     */
    public function album()
    {
        return $this->belongsTo('App\Album');
    }
}
