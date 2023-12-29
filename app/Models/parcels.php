<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class parcels extends Model
{
    protected $table= "parcels";
    protected $fillable=['referanceNumber','senderName','senderAddress','sendercontact','BranchProcessed','receiverName','receiverAddress','receivercontact','PickupBranch','weight','height','length','width','price'];
}
