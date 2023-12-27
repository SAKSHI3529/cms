@extends('layouts.cms')
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

                                    <h4>Parsal Information</h4>
                                    <div class="row">

                                        <div class="col-md-2 mr-5 ">
                                            <div class="form-group">
                                                <label for="weight">Weight</label>
                                                <input class="form-control" type="weight" value="{{$parcels->weight}}" id="weight" name="weight">
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
                                                <input class="form-control" type="length" value="{{$parcels->length}}" id="length" name="length">
                                            </div>
                                        </div>

                                        <div class="col-md-2 mr-5">
                                            <div class="form-group">
                                                <label for="width">Width</label>
                                                <input class="form-control" type="width" value="{{$parcels->width}}" id="width" name="width">
                                            </div>
                                        </div>

                                        <div class="col-md-2 ">
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input class="form-control" type="price" value="{{$parcels->price}}" id="price" name="price">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                        UPDATE
                                    </button>
                                    {{-- <button type="reset" class="btn btn-secondary waves-effect">
                                Cancel
                            </button> --}}
                                </div>
                    </form>
                @endsection
