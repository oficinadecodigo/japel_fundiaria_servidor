<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario.
 *
 * @author  The scaffold-interface created at 2019-06-16 04:47:57pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Usuario extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'usuarios';

	
}
