<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Profile extends Model
{
    use SoftDeletes;
	protected $guarded = [];
    //
    public function getRouteKeyName(){
   	 return 'username';
	}
	public function users()
    {
        return $this->belongsTo('App\User');
    }
}
