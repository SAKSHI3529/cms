@extends('layouts.cms')
@section('content')
<div class="container-fluid mt-3">
    <div class="card">
        <form action="{{url("/branch")}}" method="GET">
            @csrf
        <div class="card-body">

          
            <div class="card-body">

               
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="street" >Street/Building</label>
                            <input class="form-control" type="street" value="" id="street">
                        </div>
                        
                        <div class="form-group">
                            <label for="state" >State</label>
                            <input class="form-control" type="state" value="" id="state" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="country" >Country</label>
                            <input class="form-control" type="country" value="" id="country" placeholder="">
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
                            <label for="city">City</label>
                            <input class="form-control" type="city"  id="city">
                        </div>

                        <div class="form-group">
                            <label for="zip_code">Zip Code/ Portal Code</label>
                            <input class="form-control" type="zip_code"  id="zip_code">
                        </div>

                        
                        <div class="form-group">
                            <label for="contact">contact</label>
                            <input class="form-control" type="contact"  id="contact">
                        </div>
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