@extends('layouts.cms')
@section('content')
        <div class="card-body ">  
            <div class="row">
                <div class="col-md-12">
                    <div class="search-container">
                     
                        <form action="/action_page.php">
                          <p>Enter Tracking Number:</p>
                          <input type="text" placeholder="Search.." name="search">
                          <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                      </div>
                </div> 
            </div>
        </div>
@endsection