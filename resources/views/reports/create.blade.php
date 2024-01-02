@extends('layouts.cms')
@section('content')



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12">
                                <div class="invoice-title">
                                    <h4 class="float-right font-size-16"><strong>Reference Number :</strong> {{$par->referanceNumber}} </h4>
                                    
                                    <h3 class="mt-0">
                                        <img src="assets/images/logo-dark.png" alt="image" height="24" />
                                    </h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <address>
                                            <strong>Sender Name:</strong><br>
                                            {{$par->senderName}}<br>
                                            {{$par->senderAddress}}<br>
                                            {{$par->sendercontact}}

                                        </address>
                                    </div>
                                    <div class="col-6 text-right">
                                        <address>
                                            <strong>Receiver Name</strong><br>
                                            {{$par->receiverName}}<br>
                                            {{$par->receiverAddress}}<br>
                                            {{$par->receivercontact}}

                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                    {{-- <div class="col-6 mt-4">
                                                    <address>
                                                            <strong>Payment Method:</strong><br>
                                                            Visa ending **** 4242<br>
                                                            jsmith@email.com
                                                        </address>
                                                </div> --}}
                                    <div class="col-12 mt-4 text-right">
                                        <address>
                                            <strong>Order Date:</strong><br>
                                            {{$par->created_at}}
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
                                        <h3 class="font-size-16"><strong>Order Details</strong></h3>
                                    </div>
                                    <div class="">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td><strong>Product Details</strong></td>
                                                        <td class="text-center"><strong>Price: </strong></td>
                                                        
                                                        <td class="text-center"><strong>Weight</strong>
                                                        </td>
                                                        <td class="text-right"><strong>Totals</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <td>{{$par->Productdetails}}</td>
                                                    <td class="text-center">{{$par->price}}</td>
                                                    <td class="text-center">{{$par->weight}}</td>
                                                    <td class="text-right">{{$par->price}}</td>
                                                </tr>
                                                <td></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-right">56</td>
                                            </tr>
                                            {{-- <tr>
                                                <td class="thick-line"></td>
                                                <td class="thick-line"></td>
                                                <td class="thick-line text-center">
                                                    {{-- <strong>Subtotal</strong></td>
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
                                                        <td class="no-line text-center">
                                                            <strong>Total</strong>
                                                        </td>
                                                        <td class="no-line text-right">
                                                            {{-- <h4 class="m-0">$685.99</h4></td> --}}
                                                    </tr>
                                                </tr>
                                                <td></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-right">{{$par->price}}</td>
                                            </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="d-print-none">
                                            <div class="float-right">
                                                <a href="javascript:window.print()"
                                                    class="btn btn-success waves-effect waves-light"><i
                                                        class="fa fa-print"></i></a>
                                                        <a href="{{url('/parcels')}}" class="btn btn-danger"  data-toggle="tooltip" data-placement="top" data-original-title="Reports">
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
