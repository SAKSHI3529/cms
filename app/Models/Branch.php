<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Branch extends Model
{
    //
    protected $fillable=['name','ad_line','state_id','city_id','zip_code','contact'];

    protected $appends =['city'];
    
    function getCityAttribute(){
        $city = DB::table('cities')->select('city')->where('id',$this->city_id)->pluck('city')->first();
        return $city;
    }
}
