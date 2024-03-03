@extends('layouts.cms')
@section('title','Parcels edit')
@section('content')
    <div class="container-fluid mt-3">
        <div class="card">

            <div class="card-body">

                <div class="card-body">



                    <form action="{{ url('/parcels/'.$parcels->id) }}" method="POST">
                        @method("PUT")
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h4>Sender Information</h4>
                                    <label for="fname"> Name</label>
                                    <input class="form-control" type="name" value="{{$parcels->senderName}}" id="senderName" name="senderName">
                                </div>

                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <input class="form-control" type="Address" value="{{$parcels->senderAddress}}" id="senderAddress" name="senderAddress">
                                </div>
                                <div class="form-group">
                                    <label for="contact">Contact</label>
                                    <input class="form-control" type="contact" id="sendercontact" name="sendercontact" value="{{$parcels->sendercontact}}">
                                </div>

                                <div class="form-group">
                                    <label for="BranchProcessed">Branch Processed</label>
                                    <input class="form-control" type="BranchProcessed" value="{{$parcels->BranchProcessed}}" id="BranchProcessed" name="BranchProcessed">
                                </div>



                                {{-- <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" value="" id="password">
                        </div>
                        --}}
                                <!-- Add more form groups here as needed -->
                            </div>



                            <div class="col-md-6">

                                <div class="form-group">
                                    <h4> Receiver Information</h4>
                                    <label for="Name">Name</label>
                                    <input class="form-control" type="Name" value="{{$parcels->receiverName}}" id="receiverName" name="receiverName">
                                </div>
                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <input class="form-control" type="Address" value="{{$parcels->receiverAddress}}" id="receiverAddress" name="receiverAddress">
                                </div>

                                <div class="form-group">
                                    <label for="contact">Contact</label>
                                    <input class="form-control" type="contact" id="receivercontact" name="receivercontact"value="{{$parcels->receivercontact}}">
                                    @if($errors->has('receivercontact'))
                                    <div class="error">{{ $errors->first('receivercontact') }}</div>
                                @endif
                                </div>


                                <div class="form-group">
                                    <label for=" PickupBranch ">Pickup Branch</label>
                                    <input class="form-control" type="PickupBranch" value="{{$parcels->PickupBranch}}" id="PickupBranch" name="PickupBranch">
                                </div>

                            </div>


                            <div class="card mt-5">

                                <div class="card-body">

                                    <h4>Parcel Information</h4>
                                    <div class="row">

                                        {{-- <div class="col-md-2 mr-5 ">
                                            <div class="form-group">
                                                <label for="weight">Weight</label>
                                                <input class="form-control" type="weight"  id="weight" name="weight">
                                            </div>
                                        </div>

                                        <div class="col-md-2 mr-5">
                                            <div class="form-group">
                                                <label for="height">Height</label>
                                                <input class="form-control" type="height" value="{{$parcels->height}}" id="height" name="height">
                                            </div>
                                        </div>

                                        <div class="col-md-2 mr-5">
                                            <div class="form-group">
                                                <label for="length">Length</label>
                                                <input class="form-control" type="length"  id="length" name="length">
                                            </div>
                                        </div>

                                        <div class="col-md-2 mr-5">
                                            <div class="form-group">
                                                <label for="width">Width</label>
                                                <input class="form-control" type="width" value="{{$parcels->width}}" id="width" name="width">
                                            </div>
                                        </div> --}}
                                        <div class="card mt-5">

                                            <div class="card-body">
            
                                                <h4>Parcel Information</h4>
                                                <div class="row"> <div class="col-md-3 ">
                                                    <div class="form-group">
                                                        <label for="Productdetails">Product details (Type)</label>
                                                        <select id="dropdown" input class="form-control" name="Productdetails"value="{{$parcels->Productdetails}}">
                                                              
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
            
            
                                                <div class="col-md-2 mr-5 ">
                                                    <div class="form-group">
                                                        <label for="weight">Weight</label>
                                                        <br>
                                                        <select id="pricelist" input class="form-control" name="weight"value="{{$parcels->weight}}"
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
            
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mr-5 ">
                                                    <div class="form-group">
                                                        <label for="Shippingtype">Shippingtype</label>
            
                                                        <select id="Shippingtype" input class="form-control" name="Shippingtype" value="{{$parcels->Shippingtype}}"onchange="getprice()">
                                                            <option value="ExpressCharges">ExpressCharges</option>
                                                            <option value="EconomicCharges">EconomicCharges</option>
                                                        </select>
                                                    </div>
                                                </div>

                                        <div class="col-md-2 ">
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input class="form-control" type="price" value="{{$parcels->price}}" id="price" name="price">
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-2 ">
                                            <div class="form-group">
                                                <label for="Productdetails">Product details</label>
                                                <input class="form-control" type="Productdetails"  id="Productdetails" name="Productdetails">
                                            </div>
                                        </div> --}}


                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                        Update
                                    </button>
                                    {{-- <button type="reset" class="btn btn-secondary waves-effect">
                                Cancel
                            </button> --}}
                                </div>
                    </form>
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
                    
                @endsection
