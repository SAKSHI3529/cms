@extends('layouts.cms')
@section('content')

<div class="card ">
    <div class="card-body ">
        <h3 class="text-center mb-5">Update Parcel Status</h3>

        <div class="row justify-content-center">
            <div class="col-md-6">

                <label for="example-text-input" class="col-form-label">Enter Reference Number</label>
                <input class="form-control" type="number" value="" id="" name="referenceNumber">
            </div>
        </div>

        <div class="form-group row justify-content-center ">

            <div class="col-sm-6 mt-3">
                <label class="col-sm-4 col-form-label">Select Status</label>
                <select class="form-control">
                    <option>Select</option>
                    <option>Large select</option>
                    <option>Small select</option>
                </select>
            </div>
        </div>

        {{-- <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu is right-aligned
                <i class="mdi mdi-chevron-down"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" style="">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div> --}}

    <div class="text-center mt-4">
        <a href="" class="btn btn-primary ">
            Update
        </a>
    </div>
    </div>
</div>



    
@endsection