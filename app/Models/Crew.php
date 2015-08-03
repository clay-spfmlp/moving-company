<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{

    protected $fillable = [
    	'name',
    	'truck_id',
    ];

    /**
     * Get the movers for the crew.
     */
    public function movers()
    {
        return $this->belongsToMany('App\Models\Mover', 'crew_mover');
    }

    /**
     * Get the Truck for the crew.
     */
    public function truck()
    {
        return $this->belongsTo('App\Models\Truck');
    }

    /**
    * Get an array of Crews for select list
    */
    public static function crewList()
    {
    	$a = ['' => '-- Select Crew --'];
    	$b = Crew::lists('name', 'id');
    	
    	return $a + $b;
    }

}
