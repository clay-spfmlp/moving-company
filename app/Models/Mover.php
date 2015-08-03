<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mover extends Model
{

    protected $fillable = [
    	'first_name',
    	'last_name',
    	'photo',
    ];

    /**
    * Get an array of Trucks for select list
    */
    public static function moverList()
    {
    	$a = Mover::all();
        $b = [];
    	foreach ($a as $v) {
    		$b[$v->id] = $v->first_name . ' ' . $v->last_name;
    	}

    	return $b;
    }

}
