<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class parcels extends Model
{
    protected $table= "parcels";
    protected $fillable=['referanceNumber','senderName','senderAddress','sendercontact','BranchProcessed->nullable','receiverName','receiverAddress','receivercontact','PickupBranch->nullable','weight','height','Shippingtype','width','price', 'Productdetails','userID','email'];
    function userinfo(){
        return $this->hasOne('App\User','id','userID');
    }

    function trackingstatus(){
        return $this->hasMany('App\Models\tracking','referanceNumber','referanceNumber')->latest();
    }
}
