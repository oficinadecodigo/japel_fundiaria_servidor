<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Moradium.
 *
 * @author  The scaffold-interface created at 2019-06-17 01:50:43am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Moradium extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'moradias';

	
	public function pessoa()
	{
		return $this->belongsTo('App\Pessoa','pessoa_id');
	}

	
	public function usuario()
	{
		return $this->belongsTo('App\Usuario','usuario_id');
	}

	
}
