@extends('layouts.cms')
@section('title','Parcels creates')
@section('content')
    <div class="container-fluid mt-3">
        <div class="card">
           <center> <h1>Parcel Details</h1></center>

            <div class="card-body">

                <div class="card-body">

                    <h3>Parcels Form</h3>



                    <form action="{{ url('/parcels') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h4>Sender Information</h4>
                                    <label for="fname"> Name</label>
                                    <input class="form-control" type="name" value="" id="senderName" name="senderName" required>
                                    @if($errors->has('senderName'))
                                    <div class="error">{{ $errors->first('senderName') }}</div>
                                @endif
                                </div>

                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <input class="form-control" type="Address" value="" id="senderAddress" name="senderAddress" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact">Contact</label>
                                    <input class="form-control" type="number" id="sendercontact" name="sendercontact" required>
                                    @if($errors->has('sendercontact'))
                                    <div class="error">{{ $errors->first('sendercontact') }}</div>
                                @endif
                                </div>

                                <div class="form-group">
                                    <label for="BranchProcessed">Branch Processed</label>

                                  
                                    <select class="form-control" name="BranchProcessed">
                                        <option>Select</option>
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
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" id="email" name="email" required>
                                    @if($errors->has('email'))
                                    <div class="error">{{ $errors->first('email') }}</div>
                                @endif
                                </div>



                               
                        </div>



                            <div class="col-md-6">

                                <div class="form-group">
                                    <h4> Receiver Information</h4>
                                    <label for="Name">Name</label>
                                    <input class="form-control" type="Name" value="" id="receiverName" name="receiverName" required>
                                    @if($errors->has('receiverName'))
                                        <div class="error">{{ $errors->first('receiverName') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <input class="form-control" type="Address" value="" id="receiverAddress" name="receiverAddress" required>
                                </div>

                                <div class="form-group">
                                    <label for="contact">Contact</label>
                                    <input class="form-control" type="number" id="receivercontact" name="receivercontact"  required>
                                    @if($errors->has('receivercontact'))
                                    <div class="error">{{ $errors->first('receivercontact') }}</div>
                                @endif
                                </div>

                                <div class="form-group">
                                    <label for=" PickupBranch ">Pickup Branch</label>
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


                            <div class="card mt-5">

                                <div class="card-body">

                                    <h4>Parcel Information</h4>
                                    <div class="row"> <div class="col-md-3 ">
                                        <div class="form-group">
                                            <label for="Productdetails">Product details (Type)</label>
                                            <select id="dropdown" input class="form-control" name="Productdetails">
                                                  
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
                                                 {{--  type="Productdetails" value="" id="Productdetails" name="Productdetails"> --}}
                                            </select>
                                             
                                        </div>
                                    </div>


                                    <div class="col-md-2 mr-5 ">
                                        <div class="form-group">
                                            <label for="weight">Weight</label>
                                            <br>
                                            <select id="pricelist" input class="form-control" name="weight"
                                                onchange="getprice()">

                                                <option value="0-1kg">0-1 kg</option>
                                                <option value="1-2kg">1-2 kg</option>
                                                <option value="2-5kg">2-5 kg</option>
                                                <option value="5-10kg">5-10 kg</option>
                                                <option value="10-15kg">10-15kg</option>
                                                <option value="15-20kg">15-20 kg</option>
                                                <option value="20-25kg">20-25 kg</option>
                                                <option value="25-50kg">25-50kg</option>
                                            </select>

                                            {{-- type="number" value="" id="weight" > --}}
                                        </div>
                                    </div>
                                    <div class="col-md-2 mr-5 ">
                                        <div class="form-group">
                                            <label for="Shippingtype">Shippingtype</label>

                                            <select id="Shippingtype" input class="form-control" name="Shippingtype" onchange="getprice()">
                                                <option value="ExpressCharges">ExpressCharges</option>
                                                <option value="EconomicCharges">EconomicCharges</option>
                                            </select>
                                        </div>
                                    </div>

                                        {{-- <div class="col-md-2 mr-5">
                                            <div class="form-group">
                                                <label for="height">Height</label>
                                                <input class="form-control" type="number" value="" id="height" name="height" required>
                                            </div>
                                        </div> --}}

                                        {{-- <div class="col-md-2 mr-5">
                                            <div class="form-group">
                                                <label for="length">Length</label>
                                                <input class="form-control" type="number" value="" id="length" name="length" required>
                                            </div>
                                        </div> --}}

                                        {{-- <div class="col-md-2 mr-5">
                                            <div class="form-group">
                                                <label for="width">Width</label>
                                                <input class="form-control" type="number" value="" id="width" name="width" required>
                                            </div>
                                        </div> --}}

                                        <div class="col-md-3 ">
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input class="form-control" type="number" value="" id="price" name="price" required>
                                            </div>
                                        </div>
                                       

                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                        Submit
                                    </button>
                                    {{-- <button type="reset" class="btn btn-secondary waves-effect">
                                Cancel
                            </button> --}}
                                </div>
                    </form>
                </div>
            </div>
            <script>
                function getprice() {
               
               
        
           
        
                 var valux = $('#pricelist').val();
                    var parceltype = $('#Shippingtype').val();
                    console.log(valux);
                    console.log(parceltype);
                    let price = 0;
                    switch (valux) {
                      
                        case "0-1kg":
                          if(parceltype=="EconomicCharges"){
                            price=24;
                          }
                          else
        
                            price = 49
                            break;
        
                        case "1-2kg":
                        if(parceltype=="EconomicCharges"){
                            price=45;
                          }
                          else
                            price = 96
                            break;
        
                        case "2-5kg":
                        if(parceltype=="EconomicCharges"){
                            price=93;
                          }
                          else
                            price = 142
                            break;
        
                        case "5-10kg":
                        if(parceltype=="EconomicCharges"){
                            price=145;
                          }
                          else
                            price = 193
                            break;
        
                        case "10-15kg":
                        if(parceltype=="EconomicCharges"){
                            price=296;
                          }
                          else
                            price = 345
                            break;
        
                        case "15-20kg":
                        if(parceltype=="EconomicCharges"){
                            price=595;
                          }
                          else
                            price = 746
                            break;
        
                        case "20-25kg":
                        if(parceltype=="EconomicCharges"){
                            price=741;
                          }
                          else
                            price = 1093
                            break;
        
                        case "25-50kg":
                        if(parceltype=="EconomicCharges"){
                            price=1200;
                          }
                          else
                            price = 1500
                            break;
                    }
                    $('#price').val(price)
                };
            </script>
        </div>
    </div>
@endsection
