
@extends('layouts.cms')
@section('title','Dashboard')
@section('content')
    <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4>Dashboard</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Madhur.</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                            </div>
                        </div>
                        {{-- <div class="col-sm-6">
                            <div class="state-information d-none d-sm-block">
                                <div class="state-graph">
                                    <div id="header-chart-1"></div>
                                    <div class="info">Balance $ 2,317</div>
                                </div>
                                <div class="state-graph">
                                    <div id="header-chart-2"></div>
                                    <div class="info">Item Sold 1230</div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="fas fa-boxes float-right"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16">Parcels</h6>
                                        <h2 class="mb-4">{{$parcelscounts}}</h2>
                                        {{-- <span class="badge badge-info"> +11% </span> <span class="ml-2">From previous period</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="fas fa-boxes float-right"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16"> Today's Parcels</h6>
                                        <h2 class="mb-4">{{$todaysparcelscounts}}</h2>
                                        {{-- <span class="badge badge-info"> +11% </span> <span class="ml-2">From previous period</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @role('delivary boy')
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="fas fa-boxes float-right"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16"> Taken Parcels</h6>
                                        

                                        <h2 class="mb-4">{{$parcelCount}}</h2>
                                        {{-- <span class="badge badge-info"> +11% </span> <span class="ml-2">From previous period</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="fas fa-boxes float-right"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16"> Delivared</h6>
                                        

                                        <h2 class="mb-4">{{$todaysDelivared}}</h2>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 

                        @endrole

                        @role('admin')
                       
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-tag-text-outline float-right"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16">Branches</h6>
                                        <h2 class="mb-4">{{$branchscounts}}</h2>
                                        {{-- <span class="badge badge-warning"> 0% </span> <span class="ml-2">From previous period</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-account-supervisor-outline float-right"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16">Staff</h6>
                                        <h2 class="mb-4">{{$userscounts}}</h2>
                                        {{-- <span class="badge badge-info"> +89% </span> <span class="ml-2">From previous period</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                   <div class="col-xl-3 col-md-6">

                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class=" float-right">₹</i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16">Revenue</h6>
                                        <h2 class="mb-4">{{$p}}</h2>
                                        {{-- <span class="badge badge-danger"> -29% </span> <span class="ml-2">From previous period</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endrole
                        <div class="col-xl-3 col-md-6">
                           
                    
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class=" float-right">₹</i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16">Todays Revenue</h6>
                                        <h2 class="mb-4">{{$todaysRevenue}}</h2>
                                        {{-- <span class="badge badge-danger"> -29% </span> <span class="ml-2">From previous period</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        
                        

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Latest Orders</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-vertical table-nowrap mb-1">

                                            <tbody>
                                                <th><h5><b>Referance Number</b></h5></th>
                                                <th><h5><b>Sender Name</b></h5></th>
                                                <th><h5><b>Receiver Name</b></h5></th>
                                                <th><h5><b>Status</b></h5></th>
                                                <th><h5><b>Price</b></h5> </th>
                                                
                                                @foreach ($parcels as $p)
                                                <tr>
                                                    {{-- <td>{{$p->id}}</td> --}}
 
                                                    <td><h5>{{$p->referanceNumber}}</h5></td>
                                                    <td>
                                                        <h5> {{$p->senderName}}</h5>
                                                    </td>
                                                    <td>
                                                        <h5> {{$p->receiverName}}</h5>
                                                    </td>
                                                    <td>
                                                        <?php $stat=$p->trackingstatus->first()->trackinginfo??' ' ?>
                                                        <span class="badge badge-pill {{($stat=='Delivered' || $stat=='Order Confirmed')?' badge-success':''}}
                                                        {{($stat=='Order Processed' || $stat=='Out for Delivery ')?' badge-warning':''}}
                                                        {{($stat=='Arrived at Destination City')?' badge-warning':''}}
                                                        {{($stat=='Failed Delivery Attempt' || $stat=='Cancel')?' badge-danger':''}} "> 
                                                            @if($p->trackingstatus->count()>0) 
                                                        <h5> {{$stat}}</h5>
                                                         @else <span class="badge badge-dark"><h6>Not Updated </h6></span>
                                                       @endif
                                                     </span></td>
                                                    <td>
                                                        <h5> {{$p->price}}</h5>
                                                    </td>
                                                    
                                                    
                                                </tr>
                                                @endforeach
                                               

                                                

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    {{-- <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    © 2018 - <script>document.write(new Date().getFullYear())</script> Lexa <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                                </div>
                            </div>
                        </div>
                    </footer> --}}
                </div>
@endsection
