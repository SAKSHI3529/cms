@extends('layouts.cms')
@section('content')
<div class="container-fluid mt-2 ">
    <div class="card">

        <div class="card-body ">  
            <div class="row">
                <div class="col-md-12">
                       <h2>Traking Number</h2>
                       <h3>{{$parcel->referanceNumber}}</h3>
                </div> 
            </div>
        </div>
    </div>
           
    <div class="card p-4">
        <div class="card-body">

   
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <h4>Sender Information</h4>
                <label for="fname"> Name:</label>
                <label for="senderName">{{$parcel->senderName}}</label>
                
            </div>

            <div class="form-group">
                <label for="Address">Address:</label>
                <label for="senderAddress">{{$parcel->senderAddress}}</label>
               
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <label for="sendercontact">{{$parcel->sendercontact}}</label>
                
            </div>

          

        </div>

  

    <div class="col-md-6">

        <div class="form-group">
            <h4> Receiver Information</h4>
            <label for="Name">Name:</label>
            <label for="receiverName">{{$parcel->receiverName}}</label>
            
        </div>
        <div class="form-group">
            <label for="Address">Address:</label>
            <label for="receiverAddress">{{$parcel->receiverAddress}}</label>
            
        </div>

        <div class="form-group">
            <label for="contact">Contact:</label>
            <label for="receivercontact">{{$parcel->receivercontact}}</label>
            
        </div>

       

     </div>

    </div>
</div>



            <div class="card-body">

                <h4>Parsal Information</h4>
                <div class="row">

                    <div class="col-md-2 mr-5 ">
                        <div class="form-group">
                            <label for="weight">Weight:</label><br>
                            <label for="weight">{{$parcel->weight}}</label>
                            
                        </div>
                    </div>

                    <div class="col-md-2 mr-5">
                        <div class="form-group">
                            <label for="height">Height:</label><br>
                            <label for="height">{{$parcel->height}}</label>
                            
                        </div>
                    </div>

                    <div class="col-md-2 mr-5">
                        <div class="form-group">
                            <label for="length">Length:</label><br>
                            <label for="length">{{$parcel->length}}</label>
                            
                        </div>
                    </div>

                    <div class="col-md-2 mr-5">
                        <div class="form-group">
                            <label for="width">Width:</label><br>
                            <label for="width">{{$parcel->width}}</label>
                            
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <label for="price">Price:</label><br>
                            <label for="price">{{$parcel->price}}</label>
                            
                        </div>
                    </div>


                </div>
            </div>

            <div class="card-body">

                <div class="form-group">
                    <label for="BranchProcessed">Branch Processed:</label>
                    <label for="BranchProcessed">{{$parcel->BranchProcessed}}</label>
                   
                </div>
    

                <div class="form-group">
                    <label for=" PickupBranch ">Pickup Branch:</label>
                    <label for="PickupBranch">{{$parcel->PickupBranch}}</label>
                    
                </div>

                <div class="form-group">
                    <label for=" status ">Status:</label>
                    <label for="status">{{$parcel->Status}}</label>
                    
                </div>
            </div>

    





@endsection