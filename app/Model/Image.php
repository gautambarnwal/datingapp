<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model; 
use App\User;

class Image extends Model
{ 
	protected $guarded = [];
	
    public function users()
    {
    	return $this->belongsToMany("App\User");
    }
}
