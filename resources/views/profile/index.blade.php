@extends('layouts.cms')
@section('content')
    
<main id="main" class="main">
  

    <div class="pagetitle">
      <h1>Profile</h1>
      
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/images/my-img/profile-img.png" alt="Profile" class="rounded-circle">
              <h2>{{Auth::user()->name}}</h2>
              <h3>{{Auth::user()->roles->first()->name??'No role'}}</h3>
              
            </div>
          </div>

        </div>



        

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">

              <div class="card-body">

                <h4 class="card-title">User Profile</h4>
               
      
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#home1" role="tab" aria-selected="false">
                            <span class="d-block d-sm-none">Overview</span>
                            <span class="d-none d-sm-block">Overview</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#profile1" role="tab" aria-selected="true">
                            <span class="d-block d-sm-none">Edit Profile</span>
                            <span class="d-none d-sm-block">Edit Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages1" role="tab" aria-selected="false">
                            <span class="d-block d-sm-none">Change Password</span>
                            <span class="d-none d-sm-block">Change Password</span>
                        </a>
                    </li>
                    
                </ul>
      
                <!-- Overview panes -->
                <div class="tab-content">
                    <div class="tab-pane p-3" id="home1" role="tabpanel">
                        <p class="mb-0">
                          <div class="card-body">

                            <h3>Profile Details</h3>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <label for="name">{{Auth::user()->name}}</label>
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Branch</label>
                                <div class="col-sm-10">
                                  <label for="name">//branch name</label>
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label for="example-email-input" class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">
                                  <label for="name">{{Auth::user()->roles->first()->name??'No role'}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-url-input" class="col-sm-2 col-form-label">Contact</label>
                                <div class="col-sm-10">
                                  <label for="name">{{Auth::user()->contact}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                  <label for="name">{{Auth::user()->address}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-password-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <label for="name">{{Auth::user()->email}}</label>
                                </div>
                            </div>
                           
                        </div>
                        </p>
                    </div>








                    





                    <!-- Edit Profile panes -->

                    <div class="tab-pane p-3 active" id="profile1" role="tabpanel">
                        <p class="mb-0">
                          <div class="card-body">

                      
                            <form method="post" action="{{url('/profile')}}">
                              @csrf
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{Auth::user()->name}}" id="example-text-input" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{Auth::user()->roles->first()->name??'No role'}}" id="example-search-input" name="role" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-sm-2 col-form-label">Contact</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{Auth::user()->contact}}" id="example-email-input" name="contact">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-url-input" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{Auth::user()->address??'Not added'}}" id="example-url-input" name="address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" value="{{Auth::user()->email}}" id="example-tel-input" name="email">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light" data-toggle="button" aria-pressed="false">
                              Save Changes
                          </button>
                           
                        </form>
                        </div>
                        </p>
                    </div>


                    <!-- change password panes -->
                    <div class="tab-pane p-3" id="messages1" role="tabpanel">
                        <p class="mb-0">
                          <div class="card-body">

                      

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label">Current Password</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-sm-3 col-form-label">New Password</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="search" value="" id="example-search-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-sm-3 col-form-label">Re-enter New Password</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="email" value="" id="example-email-input">
                                </div>
                            </div>
                            
                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="button" aria-pressed="false">
                               Change Password
                          </button>
                           
                        </div>
                        </p>
                    </div>


                   
                </div>
      
            </div>
              
            

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
@endsection