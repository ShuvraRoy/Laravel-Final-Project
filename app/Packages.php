<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    //
     protected $table = "packages";
	public $timestamps = false;
	/*const CREATED_AT = "create_time";
	const UPDATED_AT = "update_time";*/
	protected $primaryKey = "id";
}
