<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Branch extends Model
{
    //
    protected $fillable=['name','ad_line','state_id','city_id','zip_code','contact'];

    protected $appends =['city','state'];
    
    function getCityAttribute(){
        $city = DB::table('cities')->select('city')->where('id',$this->city_id)->pluck('city')->first();
        return $city;
    }

    
    
    function getStateAttribute(){
        $state = DB::table('states')->select('name')->where('id',$this->state_id)->pluck('name')->first();
        return $state;
    }
}
