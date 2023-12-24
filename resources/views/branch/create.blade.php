@extends('layouts.cms')
@section('content')
<div class="container-fluid mt-3">
    <div class="card">
        <form action="{{url("/branch")}}"method="GET">
            @csrf
        <div class="card-body">

          
            <div class="card-body">

               
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname" > Name</label>
                            <input class="form-control" type="name" value="" id="name">
                        </div>
                        
                        <div class="form-group">
                            <label for="address" >Address</label>
                            <input class="form-control" type="address" value="" id="address" placeholder="please enter your address">
                        </div>

                        {{-- <div class="form-group"> --}}
                            {{-- <label for="contact">Password</label> --}}
                            {{-- <input class="form-control" type="password" value="" id="password"> --}}
                        {{-- </div> --}}
                       
                        <!-- Add more form groups here as needed -->
                    </div>
            
                    <div class="col-md-6">

                        {{-- <div class="form-group"> --}}
                            {{-- <label for="lname">Last Name</label> --}}
                            {{-- <input class="form-control" type="lname" value="" id="lname"> --}}
                        {{-- </div> --}}

                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input class="form-control" type="contact"  id="contact">
                        </div>
                    </div>
                       
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect">
                                Cancel
                            </button>
                        </div>
                    </form>
                        
            

           
@endsection