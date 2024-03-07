@extends('layouts.cms')
@section('title','Parcels Details')
@section('content')
<div class="container-fluid mt-2 ">
    <div class="card">

        <div class="card-body">  
            <div class="row d-flex justify-content-end" >
                <div class="col-md-6">
                       <h2>Traking Number</h2>
                       <h3>{{$parcel->referanceNumber}}</h3>
                </div> 

                <div class="col-md-6">
                    <h4>Created On:</h4>
                    <h6>{{$parcel->created_at}}</h6>
                 </div>
            </div>
        </div>
    </div>
           
    <div class="card p-4">
        <div class="card-body">

   
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <h3>Sender Information</h3>
                <label for="fname" style="font-size: medium"> Name:</label>
                <label for="senderName">{{$parcel->senderName}}</label>
                
            </div>

            <div class="form-group">
                <label for="Address" style="font-size: medium">Address:</label>
                <label for="senderAddress">{{$parcel->senderAddress}}</label>
               
            </div>
            <div class="form-group">
                <label for="contact" style="font-size: medium">Contact:</label>
                <label for="sendercontact">{{$parcel->sendercontact}}</label>
                
            </div>

            <div class="form-group">
                <label for="contact" style="font-size: medium">Email:</label>
                <label for="sendercontact">{{$parcel->email}}</label>
                
            </div>

          

        </div>

  

    <div class="col-md-6">

        <div class="form-group">
            <h3> Receiver Information</h3>
            <label for="Name" style="font-size: medium">Name:</label>
            <label for="receiverName">{{$parcel->receiverName}}</label>
            
        </div>
        <div class="form-group">
            <label for="Address" style="font-size: medium">Address:</label>
            <label for="receiverAddress">{{$parcel->receiverAddress}}</label>
            
        </div>

        <div class="form-group">
            <label for="contact" style="font-size: medium">Contact:</label>
            <label for="receivercontact">{{$parcel->receivercontact}}</label>
            
        </div>

       

     </div>

    </div>
</div>



            <div class="card-body">

                <h4>Parcel Information</h4>
                <div class="row">

                    <div class="col-md-2 mr-5 ">
                        <div class="form-group">
                            <label for="weight" style="font-size: medium" >Product Detail:</label><br>
                            <label for="weight">{{$parcel->Productdetails}}</label>
                            
                        </div>
                    </div>

                    <div class="col-md-2 mr-5 ">
                        <div class="form-group">
                            <label for="weight" style="font-size: medium" >Weight:</label><br>
                            <label for="weight">{{$parcel->weight}}</label>
                            
                        </div>
                    </div>

                    

                    <div class="col-md-2 mr-5">
                        <div class="form-group">
                            <label for="Shippingtype" style="font-size: medium">Shippingtype:</label><br>
                            <label for="Shippingtype">{{$parcel->Shippingtype}}</label>
                            
                        </div>
                    </div>

                    <div class="col-md-2 mr-5">
                        <div class="form-group">
                            <label for="Shippingtype" style="font-size: medium">Paymeny Method:</label><br>
                            <label for="Shippingtype">{{$parcel->Payment}}</label>
                            
                        </div>
                    </div>

                    {{-- <div class="col-md-2 mr-5">
                        <div class="form-group">
                            <label for="width" style="font-size: medium">Width:</label><br>
                            <label for="width">{{$parcel->width}}</label>
                            
                        </div>
                    </div> --}}

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <label for="price" style="font-size: medium">Price:</label><br>
                            <label for="price">{{$parcel->price}}</label>
                            
                        </div>
                    </div>


                </div>
            </div>

            <div class="card-body">

                <div class="form-group">
                    <label for="BranchProcessed" style="font-size: medium">Branch Processed:</label>
                    <label for="BranchProcessed">{{$parcel->BranchProcessed}}</label>
                   
                </div>
    

                <div class="form-group">
                    <label for=" PickupBranch " style="font-size: medium">Pickup Branch:</label>
                    <label for="PickupBranch">{{$parcel->PickupBranch}}</label>
                    
                </div>

                <div class="form-group">
                    <label for="updatedBy " style="font-size: medium">Updated By:</label><br>
                    @if($parcel->userinfo)
                    <label for="updatedBy">ID:{{$parcel->userinfo->id}}</label><br>
                    <label for="updatedBy">Name:{{$parcel->userinfo->name}}</label>
                    @endif
                    
                    
                </div>
                {{-- <div class="form-group">
                    <label for=" PickupBranch " style="font-size: medium">Status:</label>
                    <label for="PickupBranch">{{$parcel->trackingstatus->first()->trackinginfo}}</label>
                    
                </div> --}}
                

             

                
                   <a href="{{url('/parcels')}}" class="btn btn-danger"  data-toggle="tooltip" data-placement="top" data-original-title="Reports">
                    Close
                </a>

            </div>

    





@endsection