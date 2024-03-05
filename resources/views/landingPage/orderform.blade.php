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
    </header><!-- End Header -->

    <main id="main">

        <div class="container">
            <div class="header  p-3" style="background-color: #f8903b9e">

                <h3 class="modal-title fw-bold" id="myModalLabel">Online Courier Service - Booking Form</h3>
                <p><i class="fa fa-info-circle"></i>Fill Required Information to Schedule Pickup - No Registration
                    Needed.</p>
            </div>
        </div>

        <div class="container mt-3 ">
            @include('flash::message')


            <div class="card col-md-12 mb-5 ">

                <div class="card-body">

                    <div class="card-body">







                        <form action="{{ url('/orderform') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h4>Sender Information</h4>
                                        <label for="fname"> Name</label>
                                        <input class="form-control" type="name" value="{{ old('senderName') }}"
                                            id="senderName" name="senderName" required>
                                        @if ($errors->has('senderName'))
                                            <div class="error">{{ $errors->first('senderName') }}</div>
                                        @endif

                                    </div>

                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <input class="form-control" type="Address" value="{{ old('senderAddress') }}"
                                            id="senderAddress" name="senderAddress" required>
                                            <h6><p class="text-muted">Address in plot no,street/apartment name,land mark,city,pincode</p></h6>
                                    </div>

                                    <div class="form-group">
                                        <label for="sendercontact">Sender Contact</label>
                                        <input class="form-control" type="number" id="sendercontact" name="sendercontact" >
                                        @if($errors->has('sendercontact'))
                                        <div class="error text-danger">{{ $errors->first('sendercontact') }}</div>
                                    @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" type="email" id="email" name="email"
                                            required>
                                        @if ($errors->has('email'))
                                            <div class="error">{{ $errors->first('email') }}</div>
                                        @endif
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
                                        <input class="form-control" type="Name"  id="receiverName" name="receiverName" value="{{ old('receiverName') }}" required>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <input class="form-control" type="Address"  id="receiverAddress" name="receiverAddress" value="{{ old('receiverAddress') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="receivercontact">Receiver Contact</label>
                                        <input class="form-control" type="number" id="receivercontact" name="receivercontact" >
                                        @if($errors->has('receivercontact'))
                                          <div class="error text-danger">{{ $errors->first('receivercontact') }}</div>
                                        @endif
                                    </div>



                                </div>


                                <div class="card mt-5">

                                    <div class="card-body">

                                        <h4>Parcel Information</h4>
                                        <div class="row">
                                            <div class="col-md-3 mb-4 ">
                                                <div class="form-group">
                                                    <label for="Productdetails">Product details(type)</label>
                                                    <select id="dropdown" input class="form-control" 
                                                        name="Productdetails">
                                                        <option value="Documents">Select</option>
                                                        <option value="Documents">Documents</option>
                                                        <option value="Electronic">Electronic</option>
                                                        <option value="KitchenProducts">KitchenProducts</option>
                                                        <option value="GiftProducts">Gift Products</option>
                                                        <option value="Books">Books</option>
                                                        <option value="Clothes">Clothes</option>
                                                        <option value="Glass products">Glass products</option>
                                                        <option value="food">food</option>
                                                        <option value="Jewelry">Jewelry</option>
                                                        <option value="Medicines">Medicines</option>
                                                        <option value="Household">Household</option>
                                                        <option value="other">other</option>

                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-3 mr-5 ">
                                                <div class="form-group">
                                                    <label for="weight">Weight</label>
                                                    <br>
                                                    <select id="weight" input class="form-control"name="weight" onchange="getprice()">
                                                  
                                                      <option value="0-1kg">0-1 kg</option>
                                                      <option value="1-2kg">1-2 kg</option>
                                                      <option value="2-5kg">2-5 kg</option>
                                                      <option value="5-10kg">5-10 kg</option>
                                                      <option value="10-15kg">10-15kg</option>
                                                      <option value="15-20kg">15-20 kg</option>
                                                    </select>


                                                </div>
                                            </div>

                                            <div class="col-md-3 mr-5 ">
                                                <div class="form-group">
                                                    <label for="Shippingtype">Shippingtype</label>

                                                    <select id="Shippingtype" input class="form-control"
                                                        name="Shippingtype" onchange="getprice()" required>
                                                        <option value="">Select </option>
                                                        <option value="ExpressCharges">ExpressCharges</option>
                                                        <option value="EconomicCharges">EconomicCharges</option>
                                                    </select>
                                                </div>
                                            </div>
                                             {{-- <div class="col-md-3 mr-5 "> 
                                                <div class="form-group"> --}}
                                                    <label for="Payment">Payment</label>
                                            <label class="radio-label">
                                                <input type="radio" class="radio-input" name="Payment" value="cash_on_delivery">
                                                Cash on Delivery
                                            </label>
                                                


                                            <div class="col-md-3 ">
                                                <div class="form-group">
                                                    <label for="price">Price</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">₹</div>
                                                        </div>
                                                        <input class="form-control" type="number" value="" id="price" name="price" onchange="getprice()"  readonly required>
                                                      </div>
                                                    
                                                </div>
                                            </div>

                                            {{-- <div class="form-group">
                                                

                                            
                                                <label for="price">Price</label>
                                                <div class="input-group mb-2">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">₹</div>
                                                  </div>
                                                  <input class="form-control" type="number" value="" id="price" name="price" disabled   required>
                                                </div>
                                              </div>
                                        
                                        </div> --}}

                                            <div class="col-md-3 mr-5 ">
                                                <div class="form-group">
                                                    <label for="pick-up-date">Pickup Date</label>
                                                    <input type="date" class="form-control" name="pick-up-date"
                                                        required>
                                                    <br>

                                                </div>
                                            </div>

                                            <div class="col-md-3 mr-5 ">
                                                <div class="form-group">
                                                    <label for="pick-up-time">Pickup Time</label>
                                                    <br>
                                                    <select id="pick-up-time" input class="form-control"
                                                        name="pick-up-time" required>

                                                        <option value="">Select Time</option>
                                                        <option value="08:00 AM">08:00 AM</option>
                                                        <option value="08:30 AM">08:30 AM</option>
                                                        <option value="09:00 AM">09:00 AM</option>
                                                        <option value="09:30 AM">09:30 AM</option>
                                                        <option value="10:00 AM">10:00 AM</option>
                                                        <option value="10:30 AM">10:30 AM</option>
                                                        <option value="11:00 AM">11:00 AM</option>
                                                        <option value="11:30 AM">11:30 AM</option>
                                                        <option value="12:00 PM">12:00 PM</option>
                                                        <option value="12:30 PM">12:30 PM</option>
                                                        <option value="01:00 PM">01:00 PM</option>
                                                        <option value="01:30 PM">01:30 PM</option>
                                                        <option value="02:00 PM">02:00 PM</option>
                                                        <option value="02:30 PM">02:30 PM</option>
                                                        <option value="03:00 PM">03:00 PM</option>
                                                        <option value="03:30 PM">03:30 PM</option>
                                                        <option value="04:00 PM">04:00 PM</option>
                                                        <option value="04:30 PM">04:30 PM</option>
                                                        <option value="05:00 PM">05:00 PM</option>
                                                        <option value="05:30 PM">05:30 PM</option>
                                                        <option value="06:00 PM">06:00 PM</option>
                                                        <option value="06:30 PM">06:30 PM</option>
                                                        <option value="07:00 PM">07:00 PM</option>
                                                        <option value="07:30 PM">07:30 PM</option>
                                                        <option value="08:00 PM">08:00 PM</option>
                                                        <option value="08:30 PM">08:30 PM</option>
                                                        <option value="09:00 PM">09:00 PM</option>
                                                    </select>


                                                </div>
                                            </div>

















                                        </div>
                                    </div>

                        </form>


                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary  active mt-5 align-center"
                            style="background-color:#f8903b">
                            {{-- <form action="{{ route('reports.create') }}" method="GET"> --}}
                            Submit
                        </button>


                    </div>






                </div>

                <div class="checkout-info-box text-secondary m-5">
                    <h4 class="text-secondary"><i class="fa fa-info-circle "></i> &nbsp;Book a trusted courier Call
                        Now: +91-8975058970</h4>
                    <p>&gt;&gt; Upon completing this booking enquiry, you will receive a Mail from us assigned for your
                        order.</p>
                    <p>&gt;&gt; Low-priced &amp; fast delivery, Urgent delivery at extra cost</p>
                </div>

            </div>


        </div>







    </main>









    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>Madhur</span>
                    </a>

                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>



                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>Bhausinghji Road,<br>

                        Kolhapur 416002</p>
                    
                    <p class="mt-4"><strong>Phone:</strong> <span>+91 8975058970</span></p>
                    <p><strong>Email:</strong> <span>madhurtransports@gmail.com</span></p>
                </div>

            </div>


    </footer><!-- End Footer -->

    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    @include('partials.footerscript2')
    
  </div>
</div>
<script>
    function getprice() {
        var valux = $('#weight').val();
        var parceltype = $('#Shippingtype').val();
        console.log(valux);
        console.log(parceltype);
        let price = 0;
        switch (valux) {
            case "0-1kg":
                if(parceltype=="EconomicCharges"){
                    price=24;
                } else {
                    price = 49;
                }
                break;

            case "1-2kg":
                if(parceltype=="EconomicCharges"){
                    price=45;
                } else {
                    price = 96;
                }
                break;

            case "2-5kg":
                if(parceltype=="EconomicCharges"){
                    price=93;
                } else {
                    price = 142;
                }
                break;

            case "5-10kg":
                if(parceltype=="EconomicCharges"){
                    price=145;
                } else {
                    price = 193;
                }
                break;

            case "10-15kg":
                if(parceltype=="EconomicCharges"){
                    price=296;
                } else {
                    price = 345;
                }
                break;

            case "15-20kg":
                if(parceltype=="EconomicCharges"){
                    price=595;
                } else {
                    price = 746;
                }
                break;

            case "20-25kg":
                if(parceltype=="EconomicCharges"){
                    price=741;
                } else {
                    price = 1093;
                }
                break;

            case "25-50kg":
                if(parceltype=="EconomicCharges"){
                    price=1200;
                } else {
                    price = 1500;
                }
                break;
        }
        $('#price').val(price);
    };
</script>

</body>

</html>
