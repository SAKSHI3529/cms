@extends('layouts.cms')
@section('content')
    <div class="container-fluid mt-3">
        <div class="card">

            <div class="card-body">

                <div class="card-body">



                    <form action="{{ url('/parcels') }}" method="POST">
                        @csrf

                       

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h4>Sender Information</h4>
                                    <label for="fname"> Name</label>
                                    <input class="form-control" type="name" value="" id="senderName" name="senderName">
                                    @if($errors->has('senderName'))
                                    <div class="error">{{ $errors->first('senderName') }}</div>
                                @endif
                                </div>

                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <input class="form-control" type="Address" value="" id="senderAddress" name="senderAddress">
                                </div>
                                <div class="form-group">
                                    <label for="contact">Contact</label>
                                    <input class="form-control" type="contact" id="sendercontact" name="sendercontact">
                                </div>

                                <div class="form-group">
                                    <label for="BranchProcessed">Branch Processed</label>

                                    <select class="form-control" name="branchs">
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
                                    <input class="form-control" type="Name" value="" id="receiverName" name="receiverName">
                                    @if($errors->has('receiverName'))
                                        <div class="error">{{ $errors->first('receiverName') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <input class="form-control" type="Address" value="" id="receiverAddress" name="receiverAddress">
                                </div>

                                <div class="form-group">
                                    <label for="contact">Contact</label>
                                    <input class="form-control" type="contact" id="receivercontact" name="receivercontact">
                                </div>

                                <div class="form-group">
                                    <label for=" PickupBranch ">Pickup Branch</label>
                                    <select class="form-control" name="branchs">
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

                                    <h4>Parsal Information</h4>
                                    <div class="row">

                                        <div class="col-md-2 mr-5 ">
                                            <div class="form-group">
                                                <label for="weight">Weight</label>
                                                <input class="form-control" type="weight" value="" id="weight" name="weight">
                                            </div>
                                        </div>

                                        <div class="col-md-2 mr-5">
                                            <div class="form-group">
                                                <label for="height">Height</label>
                                                <input class="form-control" type="height" value="" id="height" name="height">
                                            </div>
                                        </div>

                                        <div class="col-md-2 mr-5">
                                            <div class="form-group">
                                                <label for="length">Length</label>
                                                <input class="form-control" type="length" value="" id="length" name="length">
                                            </div>
                                        </div>

                                        <div class="col-md-2 mr-5">
                                            <div class="form-group">
                                                <label for="width">Width</label>
                                                <input class="form-control" type="width" value="" id="width" name="width">
                                            </div>
                                        </div>

                                        <div class="col-md-2 ">
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input class="form-control" type="price" value="" id="price" name="price">
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <div class="form-group">
                                                <label for="Productdetails">Product details</label>
                                                <input class="form-control" type="Productdetails" value="" id="Productdetails" name="Productdetails">
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
                @endsection
