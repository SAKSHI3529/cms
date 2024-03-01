@extends('layouts.cms')
@section('title','Users create')
@section('content')
<div class="container-fluid mt-3">
    <form action="{{url('users')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="card">
        <div class="card-body">

          
            <div class="card-body">

               
            
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname" >Name</label>
                            <input class="form-control" type="fname" value="" id="name" name="name" required>
                        </div>

                       
                        
                        <div class="form-group">
                            <label for="email" >Email</label>
                            <input class="form-control" type="email" value="" id="email" placeholder="abc@example.com" name="email" required>
                        </div>

                            
                        <div class="form-group">
                            <label for="experiance" >Experiance</label>
                            <input class="form-control" type="text" value="" id="experiance" placeholder="" name="experiance" required>
                        </div>

                        <div class="form-group">
                            <label for="salary" >Salary</label>
                            <input class="form-control" type="number" value="" id="salary" placeholder="" name="salary" required>
                        </div>
                        
                       
                        <!-- Add more form groups here as needed -->
                    </div>
            
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="address" >Address</label>
                            <input class="form-control" type="address" value="" id="address" placeholder="" name="address" required>
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input class="form-control" type="number"  id="contact" name="contact" required>
                            @if($errors->has('contact'))
                            <div class="error">{{ $errors->first('contact') }}</div>
                        @endif
                        </div>

                        {{-- <div class="form-group">
                            <label for="role">Role</label>
                            <input class="form-control" type="text" value="" id="role">
                        </div> --}}

                        <div class="form-group">
                            <label for="education" >Education</label>
                            <input class="form-control" type="text" value="" id="education" placeholder="" name="education" required>
                        </div>

                       

                        
                            <div class="form-group">
                                <label class="">Select Role</label>
                                <div class="">
                                    <select class="form-control" name="roles">
                                        <option>Select</option>
                                        @foreach ($roles as $role)
                                            <option value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <input type="file" class="btn btn-primary btn-lg  waves-effect waves-light" name="resume">
                           

                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label class="">Select Role</label>
                                <div class="">
                                    <select class="form-control" name="state_id">
                                        <option>Select</option>
                                        @foreach ($states as $state)
                                            <option value="{{$state->id}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div> --}}



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