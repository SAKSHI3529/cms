<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class parcels extends Model
{
    protected $table= "parcels";
    protected $fillable=['referanceNumber','senderName','senderAddress','sendercontact','BranchProcessed->nullable','receiverName','receiverAddress','receivercontact','PickupBranch->nullable','weight','height','Shippingtype','Payment','price', 'Productdetails','userID','email', 'pick-up-date', 'pick-up-time'];
    function userinfo(){
        return $this->hasOne('App\User','id','userID');
    }

    function trackingstatus(){
        return $this->hasMany('App\Models\tracking','referanceNumber','referanceNumber')->latest();
    }
}
