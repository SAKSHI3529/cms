@extends('layouts.cms')
@section('content')

<form action="{{url('/tracking')}}" method="POST">
  @csrf
    <div class="card ">
        <div class="card-body ">
            <h3 class="text-center mb-5">Update Parcel Status</h3>
            <div class="row justify-content-center">
                <div class="col-md-6">

                    <label for="example-text-input" class="col-form-label">Enter Reference Number</label>
                    <input class="form-control" type="text" value="" id="referenceNumber" name="referanceNumber">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="form-group col-md-6 mt-4">
                    <label for=" PickupBranch ">Select Branch</label>
                    <select class="form-control "  id="branch"  name="branch">
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
            <div class="form-group row justify-content-center ">

                <div class="col-sm-6 mt-2">
                    <label class="col-sm-4 col-form-label">Select Status</label>
                    <select class="form-control" id="trackinginfo" name="trackinginfo">
                        <option>Select </option>
                        <option>Order Confirmed</option>
                        <option>Order Processed</option>
                        <option>Out for Delivery</option>
                        <option>Arrived at Destination City</option>
                        <option>Arrived at </option>
                        <option>Delivered</option>
                        <option>Failed Delivery Attempt</option>

                    </select>

                    {{-- <div>
                        <span class="badge badge-light">Light</span>
                        <span class="badge badge-primary">Primary</span>
                        <span class="badge badge-success">Success</span>
                        <span class="badge badge-info">Info</span>
                        <span class="badge badge-warning">Warning</span>
                        <span class="badge badge-danger">Danger</span>
                        <span class="badge badge-dark">Dark</span>
                    </div> --}}
                </div>
            </div>
            
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary ">
                    Update
                </button>
            </div>
        </div>
    </div>
</form>
@endsection