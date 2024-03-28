@extends('layouts.cms')
@section('title','Parcels creates')
@section('content')
    <div class="container-fluid mt-3">
        <div class="card">
          

            <div class="card-body">

                <div class="card-body">

                    <h1 class="pb-3">Parcels Form</h1>



                    <form action="{{ url('/parcels') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h4>Sender Information</h4>
                                    <label for="fname"> <h6>Name</h6></label>
                                    <input class="form-control" type="name" value="" id="senderName" name="senderName" required>
                                    @if($errors->has('senderName'))
                                    <div class="error">{{ $errors->first('senderName') }}</div>
                                @endif
                                </div>

                                <div class="form-group">
                                    <label for="Address"><h6>Address</h6></label>
                               
                                    <input class="form-control" type="Address" value="" id="senderAddress" name="senderAddress" required>
                                    <h6><p class="text-muted">Address in plot no,street/apartment name,land mark,city,pincode</p></h6>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="contact"><h6>Contact</h6></label>
                                    <input class="form-control" type="number" id="sendercontact" name="sendercontact" required>
                                    @if($errors->has('sendercontact'))
                                    <div class="error">{{ $errors->first('sendercontact') }}</div>
                                @endif
                                </div>

                                <div class="form-group">
                                    <label for="BranchProcessed"><h6>Branch Processed</h6></label>

                                  
                                    <select class="form-control" name="BranchProcessed">
                                        <option><h6>Select</h6></option>
                                        @foreach ($branchs as $branch)
                                            <option value="{{$branch->id}}">{{$branch->name}},{{$branch->ad_line}}</option>
                                           
                                        @endforeach
                                    </select>
                                    {{-- <input class="form-control" type="BranchProcessed" value="" id="BranchProcessed" name="BranchProcessed"> --}}

                                    @if($errors->has('BranchProcessed'))
                                        <div class="error">{{ $errors->first('BranchProcessed') }}</div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="email"><h6>Email</h6></label>
                                    <input class="form-control" type="email" id="email" name="email" required>
                                    @if($errors->has('email'))
                                    <div class="error">{{ $errors->first('email') }}</div>
                                @endif
                                </div>



                               
                        </div>



                            <div class="col-md-6">

                                <div class="form-group">
                                    <h4> Receiver Information</h4>
                                    <label for="Name"><h6>Name</h6></label>
                                    <input class="form-control" type="Name" value="" id="receiverName" name="receiverName" required>
                                    @if($errors->has('receiverName'))
                                        <div class="error">{{ $errors->first('receiverName') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="Address"><h6>Address</h6></label>
                                    
                                    <input class="form-control" type="Address" value="" id="receiverAddress" name="receiverAddress" required>
                                    <h6><p class="text-muted">Address in plot no,street/apartment name,land mark,city,pincode</p></h6>
                                   
                                </div>

                                <div class="form-group">
                                    <label for="contact"><h6>Contact</h6></label>
                                    <input class="form-control" type="number" id="receivercontact" name="receivercontact"  required>
                                    @if($errors->has('receivercontact'))
                                    <div class="error">{{ $errors->first('receivercontact') }}</div>
                                @endif
                                </div>

                                <div class="form-group">
                                    <label for=" PickupBranch "><h6>Pickup Branch</h6></label>
                                    <select class="form-control" name="PickupBranch">
                                        <option>Select</option>
                                        @foreach ($branchs as $branch)
                                        <option value="{{$branch->id}}">{{$branch->name}},{{$branch->ad_line}}</option>
                                          
                                        @endforeach
                                    </select>
                                    @if($errors->has('PickupBranch'))
                                        <div class="error">{{ $errors->first('PickupBranch') }}</div>
                                    @endif
                                </div>

                            </div>


                            <div class="card mt-5 col-md-12">

                                <div class="card-body">

                                    <h3>Parcel Details</h3>
                                    <div class="row"> 
                                        <div class="col-md-4 ">
                                        <div class="form-group">
                                            <label for="Productdetails"><h6>Product details (Type)</h6></label>
                                            <select id="dropdown" input class="form-control" name="Productdetails">
                                                <option value="">Select</option>
                                                <option value="Documents">Documents</option>
                                                <option value="Electronic">Electronic</option>
                                                <option value="KitchenProducts">KitchenProducts</option>
                                                <option value="GiftProducts">Gift Products</option>
                                                <option value="Books">Books</option>
                                                <option value="Clothes">Clothes</option>
                                                <option value="Glass products">Glass products</option>
                                                <option value="food">food</option>
                                                <option value="Jewelry">Jewelry</option>
                                                <option value="Medicines">Medicines</option>
                                                <option value="Household">Household</option>
                                                <option value="other">other</option>
                                                
                                            </select>
                                             
                                        </div>
                                    </div>


                                    <div class="col-md-4 mr-5 ">
                                        <div class="form-group">
                                            <label for="weight"><h6>Weight</h6></label>
                                            <br>
                                            <select id="weight" input class="form-control" name="weight"
                                                onchange="getprice()">
                                                <option value="">Select</option>
                                                <option value="0-1kg">0-1 kg</option>
                                                <option value="1-2kg">1-2 kg</option>
                                                <option value="2-5kg">2-5 kg</option>
                                                <option value="5-10kg">5-10 kg</option>
                                                <option value="10-15kg">10-15kg</option>
                                                <option value="15-20kg">15-20 kg</option>
                                                <option value="20-25kg">20-25 kg</option>
                                                <option value="25-50kg">25-50kg</option>
                                            </select>

                                           
                                        </div>
                                    </div>
                                    <div class="col-md-4 mr-5 ">
                                        <div class="form-group">
                                            <label for="Shippingtype"><h6>Shippingtype</h6></label>

                                            <select id="Shippingtype" input class="form-control" name="Shippingtype" onchange="getprice()">
                                                
                                                <option value="ExpressCharges">ExpressCharges</option>
                                                <option value="EconomicCharges">EconomicCharges</option>
                                            </select>
                                        </div>
                                    </div>

                                       
                                        <div class="col-md-4 ">
                                            <div class="form-group">
                                                

                                            
                                                <label for="price"><h6>Price</h6></label>
                                                <div class="input-group mb-2">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">₹</div>
                                                  </div>
                                                  <input class="form-control" type="number" value="" id="price" name="price" readonly  required>
                                                </div>
                                              </div>
                                        
                                        </div>
                                        

                                       
                                       

                                       
                                    </div>
                                
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                        Submit
                                    </button>
                                   
                                </div>
                    </form>
                </div>
            </div>
            <script>
                function getprice() {
                    var valux = $('#weight').val();
                    var parceltype = $('#Shippingtype').val();
                    console.log(valux);
                    console.log(parceltype);
                    let price = 0;
                    switch (valux) {
                        case "0-1kg":
                            if(parceltype=="EconomicCharges"){
                                price=24;
                            } else {
                                price = 49;
                            }
                            break;
            
                        case "1-2kg":
                            if(parceltype=="EconomicCharges"){
                                price=45;
                            } else {
                                price = 96;
                            }
                            break;
            
                        case "2-5kg":
                            if(parceltype=="EconomicCharges"){
                                price=93;
                            } else {
                                price = 142;
                            }
                            break;
            
                        case "5-10kg":
                            if(parceltype=="EconomicCharges"){
                                price=145;
                            } else {
                                price = 193;
                            }
                            break;
            
                        case "10-15kg":
                            if(parceltype=="EconomicCharges"){
                                price=296;
                            } else {
                                price = 345;
                            }
                            break;
            
                        case "15-20kg":
                            if(parceltype=="EconomicCharges"){
                                price=595;
                            } else {
                                price = 746;
                            }
                            break;
            
                        case "20-25kg":
                            if(parceltype=="EconomicCharges"){
                                price=741;
                            } else {
                                price = 1093;
                            }
                            break;
            
                        case "25-50kg":
                            if(parceltype=="EconomicCharges"){
                                price=1200;
                            } else {
                                price = 1500;
                            }
                            break;
                    }
                    $('#price').val(price);
                };
            </script>
            
        </div>
    </div>
@endsection
