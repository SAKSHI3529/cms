@extends('layouts.cms')
@section('content')
<div class="container-fluid mt-2 ">
    <div class="card">

        <div class="card-body ">  
            <div class="row">
                <div class="col-md-12">
                       <h2>Traking Number</h2>
                       <h3>//no.</h3>
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
                <label for="senderName">//name</label>
                
            </div>

            <div class="form-group">
                <label for="Address">Address:</label>
                <label for="senderAddress">//Address</label>
               
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <label for="sendercontact">//Contact</label>
                
            </div>

          

        </div>

  

    <div class="col-md-6">

        <div class="form-group">
            <h4> Receiver Information</h4>
            <label for="Name">Name:</label>
            <label for="receiverName">//Name</label>
            
        </div>
        <div class="form-group">
            <label for="Address">Address:</label>
            <label for="receiverAddress">//Address</label>
            
        </div>

        <div class="form-group">
            <label for="contact">Contact:</label>
            <label for="receivercontact">//contact</label>
            
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
                            <label for="weight">//Weight</label>
                            
                        </div>
                    </div>

                    <div class="col-md-2 mr-5">
                        <div class="form-group">
                            <label for="height">Height:</label><br>
                            <label for="height">//Height</label>
                            
                        </div>
                    </div>

                    <div class="col-md-2 mr-5">
                        <div class="form-group">
                            <label for="length">Length:</label><br>
                            <label for="length">//length</label>
                            
                        </div>
                    </div>

                    <div class="col-md-2 mr-5">
                        <div class="form-group">
                            <label for="width">Width:</label><br>
                            <label for="width">//width</label>
                            
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <label for="price">Price:</label><br>
                            <label for="price">//price</label>
                            
                        </div>
                    </div>


                </div>
            </div>

            <div class="card-body">

                <div class="form-group">
                    <label for="BranchProcessed">Branch Processed:</label>
                    <label for="BranchProcessed">//BranchProcessed</label>
                   
                </div>
    

                <div class="form-group">
                    <label for=" PickupBranch ">Pickup Branch:</label>
                    <label for="PickupBranch">//PickupBranch</label>
                    
                </div>

                <div class="form-group">
                    <label for=" status ">Status:</label>
                    <label for="status">//status</label>
                    
                </div>
            </div>

    







        {{-- <div class="card ">

            <div class="card-body">
                <div class="row">
            
                <div class="col-md-6">
                       <h3>Sender Information</h3>
                       <h5>Name</h5>
                       <h6>//name</h6>
                       <h5>Address</h5>
                       <h6>//address</h6>
                       <h5>Contact</h5>
                       <h6>//contact</h6>

                </div>    
            

            
                <div class="col-md-6">
                       <h3>Sender Information</h3>
                </div> 
                
            </div>  
           
        </div>

    </div> --}}



@endsection