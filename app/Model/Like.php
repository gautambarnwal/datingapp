<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Like extends Model
{
        use SoftDeletes;
	protected $guarded = [];
	
}
