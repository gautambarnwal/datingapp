<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Chat extends Model
{
    use SoftDeletes;
	protected $guarded = [];
	
	public function users()
    {
    	return $this->belongsTo("App\User");
    }
}
