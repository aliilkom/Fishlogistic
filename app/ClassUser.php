<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassUser extends Model
{	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ClassUser',
    ];

    public function users()
	{
	  return $this->hasMany('App\User');
	}
}
