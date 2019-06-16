<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pessoa.
 *
 * @author  The scaffold-interface created at 2019-06-16 05:34:20pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Pessoa extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'pessoas';

	
	public function usuario()
	{
		return $this->belongsTo('App\Usuario','usuario_id');
	}
	
	public function pessoa()
	{
		return $this->belongsTo('App\Pessoa','pessoa_id');
	}

	
}
