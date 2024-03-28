@extends('layouts.cms')
@section('title','Reports')
@section('content')



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12">
                                <div class="invoice-title">
                                    <h4 class="float-right font-size-16"><strong>Reference Number :</strong> {{$par->referanceNumber}}</h4>
                                    
                                    <h3 class="mt-0">
                                        <img src="{{url('assets/images/my-img/Frame14.png')}}" alt="image" height="50px" />
                                    </h3>

                                    {{-- <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
       
                                        <img src="{{url('assets/images/my-img/Frame14.png')}}" alt="logo"> 
                                        
                                      </a> --}}
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <address>
                                            <strong><h5><b>Sender Name:</b></h5></strong><br>
                                           <h5> {{$par->senderName}}</h5><br>
                                            <h5>{{$par->senderAddress}}</h5><br>
                                           <h5> {{$par->sendercontact}}</h5>

                                        </address>
                                    </div>
                                    <div class="col-6 text-right">
                                        <address>
                                            <strong><h5><b>Receiver Name</b></h5></strong><br>
                                           <h5> {{$par->receiverName}}</h5><br>
                                           <h5> {{$par->receiverAddress}}</h5><br>
                                            <h5>{{$par->receivercontact}}</h5>

                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                     <div class="col-6 mt-4">
                                                    <address>
                                                            <strong><h5><b>Payment Method:</b></h5></strong><br>
                                                           <h5> {{$par->Payment}}</h5><br>
                                                            
                                                        </address>
                                                </div> 
                                    <div class="col-12 mt-4 text-right">
                                        <address>
                                            <strong><h5><b>Order Date:</b></h5></strong><br>
                                           <h5> {{$par->created_at}}</h5>
                                            <br><br>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <div class="p-2">
                                        <h3 class="font-size-16"><strong><b>Order Details</b></strong></h3>
                                    </div>
                                    <div class="">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td><strong><h5><b>Product Details</b></h5></strong></td>
                                                        <td class="text-center"><strong><h5><b> Price: </b></h5></strong></td>
                                                        
                                                        <td class="text-center"><strong><h5><b> Weight</b></h5></strong>
                                                        </td>
                                                        <td class="text-center"><strong><h5><b> Shippingtype</b></h5></strong></td>
                                                        {{-- <td class="text-center"><strong>Paymenttype</strong></td> --}}
                                                        <td class="text-right"><strong><h5> Totals</h5></strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <td><h5>{{$par->Productdetails}}</h5></td>
                                                    <td class="text-center"><h5> {{$par->price}}</h5></td>
                                                    <td class="text-center"><h5> {{$par->weight}}</h5></td>
                                                    <td class="text-center"><h5> {{$par->Shippingtype}}</h5></td>
                                                    {{-- <td class="text-center">{{$par->Shippingtype}}</td> --}}

                                                    <td class="text-right"><h5> {{$par->price}}</h5></td>

                                                </tr>
                                                <td></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                {{-- <td class="thick-line"></td>
                                                <td class="thick-line"></td>
                                                <td class="thick-line text-center">
                                                    <strong>Subtotal</strong></td>
                                                <td class="thick-line text-right">$670.99</td> --}}
                                            
                                            

                                                    <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                    {{-- <tr>
                                                                    <td>BS-200</td>
                                                                    <td class="text-center">$10.99</td>
                                                                    <td class="text-center">1</td>
                                                                    <td class="text-right">$10.99</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BS-400</td>
                                                                    <td class="text-center">$20.00</td>
                                                                    <td class="text-center">3</td>
                                                                    <td class="text-right">$60.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BS-1000</td>
                                                                    <td class="text-center">$600.00</td>
                                                                    <td class="text-center">1</td>
                                                                    <td class="text-right">$600.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="thick-line"></td>
                                                                    <td class="thick-line"></td>
                                                                    <td class="thick-line text-center">
                                                                        <strong>Subtotal</strong></td>
                                                                    <td class="thick-line text-right">$670.99</td>
                                                                </tr> --}}
                                                    {{-- <tr>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line text-center">
                                                            <strong>Shipping</strong>
                                                        </td>
                                                        <td class="no-line text-right"></td>
                                                    </tr> --}}
                                                    <tr>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line text-center">
                                                            <strong><h5>Total</h5></strong>
                                                        </td>
                                                        <td class="no-line text-right">
                                                            
                                                            <h4 class="m-0">{{$par->price}}</h4></td>
                                                    </tr>
                                                </tr>
                                                <td></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-right"></td>
                                                <td class="text-right"></td>
                                            </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="d-print-none">
                                            <div class="float-right">
                                                <a href="javascript:window.print()"
                                                    class="btn btn-success waves-effect waves-light"><i
                                                        class="fa fa-print"></i></a>
                                                        <a href="{{url('/parcels')}}" class="btn btn-danger" >
                                                            Close
                                                        </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        

        </div>


        <!-- JAVASCRIPT -->
        <script src='{{url("assets/libs/jquery/jquery.min.js")}}'></script>
        <script src='{{url("assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}'></script>
        <script src='{{url("assets/libs/metismenu/metisMenu.min.js")}}'></script>
        <script src='{{url("assets/libs/simplebar/simplebar.min.js")}}'></script>
        <script src='{{url("assets/libs/node-waves/waves.min.js")}}'></script>
        <script src='{{url("assets/libs/jquery-sparkline/jquery.sparkline.min.js")}}'></script>

        <!-- App js -->
        <script src='{{url("assets/js/app.js")}}'></script>
@endsection
