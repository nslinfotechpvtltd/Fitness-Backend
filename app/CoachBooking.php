<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoachBooking extends Model {

    protected $fillable = ['coach_id', 'athlete_id', 'service_id', 'price', 'status', 'payment_details'];
    
    

 public function getServiceIdAttribute($value) {
        return $value == null ? [] : json_decode($value);
    }
 

}
