<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">



    <title>Madhur</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    @include('partials.headerscript2')



</head>


<body class="blog-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    <header id="header" class="header sticky-top d-flex align-items-center">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            {{-- <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">

                <h1>Madhur</h1>
                <span>.</span>
            </a> --}}

            <!-- Nav Menu -->
            {{-- <nav id="navmenu" class="navmenu">
      {{-- <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
     
        <h1>Madhur</h1>
        <span>.</span>
      </a> --}}

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">

                <img src="{{ url('assets/images/my-img/Frame14.png') }}" alt="logo">

            </a>
            <!-- Nav Menu -->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    {{-- <li><a href="index.html#about">About</a></li>
          <li><a href="index.html#services">Services</a></li>
          <li><a href="index.html#portfolio">Portfolio</a></li> --}}
                    <li><a href="{{ url('/#contact') }}">Contact</a></li>
                    {{-- <li><a href="blog.html" class="active">Tracking Details</a></li> --}}


                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav><!-- End Nav Menu -->



        </div>
    </header>



    <div class="row">
        <div class="col-8 " style=" margin-left:15%">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="invoice-title d-flex justify-content-between">


                                <h3 class="mt-0">
                                    <img src="{{ url('assets/images/my-img/Frame14.png') }}" alt="image"
                                        height="50px" />
                                </h3>

                                <h5 class="float-right font-size-16"><strong>Reference Number :</strong>
                                      {{ $par->referanceNumber }} </h5>

                                {{-- <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
       
                                        <img src="{{url('assets/images/my-img/Frame14.png')}}" alt="logo"> 
                                        
                                      </a> --}}
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-6">
                                    <address>
                                        <strong>
                                            <h5><b>Sender Name:</b></h5>
                                        </strong><br>
                                        <h5> {{ $par->senderName }}</h5><br>
                                        <h5>{{ $par->senderAddress }}</h5><br>
                                        <h5> {{ $par->sendercontact }}</h5>

                                    </address>
                                </div>
                                <div class="col-6  ">
                                    <address>
                                        <strong>
                                            <h5><b>Receiver Name</b></h5>
                                        </strong><br>
                                        <h5> {{ $par->receiverName }}</h5><br>
                                        <h5> {{ $par->receiverAddress }}</h5><br>
                                        <h5> {{ $par->receivercontact }}</h5>

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
                                        <strong><h5> Order Date:</h5></strong><br>
                                        <h5>  {{ $par->created_at }}</h5>
                                        <br><br>
                                    </address>
                                </div>

                                <div class="col-12  text-right">
                                    <address>
                                        <strong><h5> Payment Type:</h5></strong><br>
                                        <h5>   {{ $par->Payment }}</h5>
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
                                                    <td><strong><h5> <b>Product Details</b></h5> </strong></td>

                                                    <td class="text-center"><strong><h5> <b>Weight</b></h5> </strong>
                                                    </td>
                                                    <td class="text-center"><strong><h5> <b> Shippingtype</b></h5> </strong></td>
                                                    <td class="text-center"><strong><h5> <b> Price: </b></h5> </strong></td>

                                                    {{-- <td class="text-center"><strong>Paymenttype</strong></td> --}}
                                                    <td class="text-right"><strong><h5><b> Totals</b></h5> </strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <td><h5>{{ $par->Productdetails }}</h5></td>
                                                <td class="text-center"><h5> {{ $par->price }}</h5></td>
                                                <td class="text-center"><h5> {{ $par->weight }}</h5></td>
                                                <td class="text-center"><h5> {{ $par->Shippingtype }}</h5></td>
                                                {{-- <td class="text-center">{{$par->Shippingtype}}</td> --}}

                                                <td class="text-right"><h5> {{ $par->price }}</h5></td>

                                                </tr>
                                                <td></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-right"></td>
                                                </tr>
                                                <tr>

                                                <tr>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    <td class="no-line text-center">
                                                        <strong><h5> <b>Total</b></h5></strong>
                                                    </td>
                                                    <td class="no-line text-right">

                                                        <h4 class="m-0"><h5>{{ $par->price }}</h5></h4>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <td></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-right"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="d-print-none pt-5 ">
                                        <div class="float-right">
                                            <a href="javascript:window.print()"
                                                class="btn btn-success waves-effect waves-light">Print</a>

                                            <a href="{{ url('/parcels') }}" class="btn btn-danger">
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


    {{-- <!-- JAVASCRIPT -->
        <script src='{{url("assets/libs/jquery/jquery.min.js")}}'></script>
        <script src='{{url("assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}'></script>
        <script src='{{url("assets/libs/metismenu/metisMenu.min.js")}}'></script>
        <script src='{{url("assets/libs/simplebar/simplebar.min.js")}}'></script>
        <script src='{{url("assets/libs/node-waves/waves.min.js")}}'></script>
        <script src='{{url("assets/libs/jquery-sparkline/jquery.sparkline.min.js")}}'></script>

        <!-- App js -->
        <script src='{{url("assets/js/app.js")}}'></script> 
@endsection --}}

</body>

</html>
