<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

	/**
		* The attributes that are mass assignable.
		*
		* @var array
	*/
    protected $fillable = [
    
        'slug', 'name'
    
    ];

    public function users()
    {

    	return $this->hasMany('App\User', 'role_id', 'id');

    }
}
