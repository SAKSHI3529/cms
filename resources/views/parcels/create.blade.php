@extends('layouts.cms')
@section('content')
   <div class="container-fluid mt-3">
       <div class="card">

           <div class="card-body">

            <div class="card-body">




                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h4>Sender Information</h4>
                            <label for="fname" > Name</label>
                            <input class="form-control" type="name" value="" id="name">
                        </div>
                        
                        <div class="form-group">
                            <label for="Address" >Address</label>
                            <input class="form-control" type="Address" value="" id="Address" >
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input class="form-control" type="contact"  id="contact">
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
                            <input class="form-control" type="Name" value="" id="Name">
                        </div>
                        <div class="form-group">
                            <label for="Address" >Address</label>
                            <input class="form-control" type="Address" value="" id="Address" >
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input class="form-control" type="contact"  id="contact">
                        </div>
                        <div class="form-group">
                            <label for="Branch Processed" >Branch Processed</label>
                            <input class="form-control" type="Branch Processed" value="" id="Branch Processed" >
                        </div>
                        <div class="form-group">
                            <label for=" Pickup Branch " >Pickup Branch</label>
                            <input class="form-control" type="Pickup Branch" value="" id="Pickup Branch" >
                        </div>
                    
                    </div>


        <div class="card mt-5">

            <div class="card-body">

                    <h4>Parsal Information</h4>
                    <div class="row">
                        
                        <div class="col-md-2 mr-5 ">
                            <div class="form-group">
                                <label for="weight">Weight</label>
                                <input class="form-control" type="weight" value="" id="weight">
                            </div>
                        </div>
                    
                        <div class="col-md-2 mr-5">
                            <div class="form-group">
                                <label for="height">Height</label>
                                <input class="form-control" type="height" value="" id="height">
                            </div>
                        </div>
                    
                        <div class="col-md-2 mr-5">
                            <div class="form-group">
                                <label for="length">Length</label>
                                <input class="form-control" type="length" value="" id="length">
                            </div>
                        </div>
                    
                        <div class="col-md-2 mr-5">
                            <div class="form-group">
                                <label for="width">Width</label>
                                <input class="form-control" type="width" value="" id="width">
                            </div>
                        </div>
                    
                        <div class="col-md-2 ">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input class="form-control" type="price" value="" id="price">
                            </div>
                        </div>
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
                   

                        
                        
                        
@endsection