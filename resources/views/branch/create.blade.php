@extends('layouts.cms')
@section('content')
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-body">
                <div class="card-body">

                    <form action="{{ url('/branch') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="street">Name</label>
                                    <input class="form-control" type="text" value="" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="street">Street/Building</label>
                                    <input class="form-control" type="text" value="" id="ad_line" name="ad_line">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Select state</label>
                                    <div class="">
                                        <select class="form-control" name="state_id">
                                            <option>Select</option>
                                            @foreach ($states as $state)
                                                <option value="{{$state->id}}">{{$state->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <select class="form-control" name="city_id">
                                        <option>Select</option>
                                        @foreach ($cities as $city)
                                            <option value="{{$city->id}}">{{$city->city}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="zip_code">Zip Code/ Portal Code</label>
                                    <input class="form-control" type="zip_code" id="zip_code" name="zip_code" value="{{old('zip_code')}}">
                                    @if($errors->has('zip_code'))
                                        <div class="error">{{ $errors->first('zip_code') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact">contact</label>
                                    <input class="form-control" type="contact" id="contact" name="contact">
                                    @if($errors->has('contact'))
                                        <div class="error">{{ $errors->first('contact') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        @endsection
