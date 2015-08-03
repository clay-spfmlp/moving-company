<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    
	protected $fillable = [
    	'name',
    ];

     /**
     * Get the crew record associated with the truck.
     */
    public function crew()
    {
        return $this->hasOne('App\Models\Crew');
    }

    /**
    * Get an array of Trucks for select list
    */
    public static function truckList()
    {
    	$a = ['0' => '-- Select Truck --'];
    	$b = Truck::lists('name', 'id')->toArray();

    	
    	return $a + $b;
    }

}
