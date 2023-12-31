@extends('layouts.cms')
@section('content')



          <div class="card ">
            <div class="card-body ">
                   <div class="row justify-content-center">
                    <div class="col-md-6">
        
                      
                          <label>Enter Tracking Number:</label>
                          <div class="col-md-10 " style="display:flex; gap:5px">
                         
                          <input class="form-control" type="number" value="" id="" placeholder="Type referance number" name="traking">
                          <a href="" class="btn btn-primary" ><i class="fa fa-search"></i></a>
                         {{-- <button class="btn btn-primary" placeholder="Type Referance Number here-"><i class="fa fa-search"></i></button> --}}

                        </div>
                      
                        
                    </div>
                </div>
              </div>
            </div>
          
          
@endsection