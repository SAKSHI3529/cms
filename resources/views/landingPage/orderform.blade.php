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
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

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

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
       
        <img src="{{url('assets/images/my-img/Frame14.png')}}" alt="logo"> 
        
      </a>
      <!-- Nav Menu -->
      {{-- <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html#hero">Home</a></li>
          <li><a href="index.html#about">About</a></li>
          <li><a href="index.html#services">Services</a></li>
          <li><a href="index.html#portfolio">Portfolio</a></li>
          <li><a href="index.html#team">contact</a></li>
          <li><a href="blog.html" class="active">Tracking Details</a></li>
          

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu --> --}}

      

    </div>
  </header><!-- End Header -->

  <main id="main">

 
        <div class="container mt-3 ">
          @include('flash::message')
            <div class="card col-md-12 mb-5 ">
    
                <div class="card-body">
    
                    <div class="card-body">
                     
    
    
    
                      
                      
 
                      <form action="{{url('/orderform')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h4>Sender Information</h4>
                                        <label for="fname"> Name</label>
                                        <input class="form-control" type="name" value="{{old('senderName')}}" id="senderName" name="senderName" required>
                                        @if($errors->has('senderName'))
                                        <div class="error">{{ $errors->first('senderName') }}</div>
                                    @endif
                                       
                                    </div>
    
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <input class="form-control" type="Address" value="{{old('senderAddress')}}" id="senderAddress" name="senderAddress" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="sendercontact">Sender Contact</label>
                                        <input class="form-control" type="number" id="sendercontact" name="sendercontact" value="{{old('sendercontact')}}">
                                        @if($errors->has('sendercontact'))
                                        <div class="error text-danger">{{ $errors->first('sendercontact') }}</div>
                                    @endif
                                    </div>
                                    <div class="form-group">
                                      <label for="email">Email</label>
                                      <input class="form-control" type="email" id="email" name="email" required>
                                      @if($errors->has('email'))
                                      <div class="error">{{ $errors->first('email') }}</div>
                                  @endif
                                  </div>
                                    `
    
    
    
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
                                        <input class="form-control" type="Name" value="{{old('receiverName')}}" id="receiverName" name="receiverName" required>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <input class="form-control" type="Address" value="{{old('receiverAddress')}}" id="receiverAddress" name="receiverAddress" required>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="receivercontact">Receiver Contact</label>
                                        <input class="form-control" type="number" id="receivercontact" name="receivercontact" required value="{{old('receivercontact')}}">
                                        @if($errors->has('receivercontact'))
                                          <div class="error text-danger">{{ $errors->first('receivercontact') }}</div>
                                        @endif
                                    </div>
    
                                    
    
                                </div>
    
    
                                <div class="card mt-5">
    
                                    <div class="card-body">
    
                                        <h4>Parcal Information</h4>
                                        <div class="row">
                                          <div class="col-md-2 ">
                                            <div class="form-group">
                                                <label for="Productdetails">Product details(type)</label>
                                                <input class="form-control" type="Productdetails" value="" id="Productdetails" name="Productdetails" required>
                                            </div>
                                        </div>
    
                                            <div class="col-md-2 mr-5 ">
                                                <div class="form-group">
                                                    <label for="weight">Weight</label>
                                                    <input class="form-control" type="number" value="" id="weight" name="weight" required>
                                                </div>
                                            </div>
    
                                            {{-- <div class="col-md-2 mr-5">
                                                <div class="form-group">
                                                    <label for="height">Height</label>
                                                    <input class="form-control" type="number" value="" id="height" name="height">
                                                </div>
                                            </div> --}}
    
                                            {{-- <div class="col-md-2 mr-5">
                                                <div class="form-group">
                                                    <label for="length">Length</label>
                                                    <input class="form-control" type="number" value="" id="length" name="length">
                                                </div>
                                            </div> --}}
    
                                            {{-- <div class="col-md-2 mr-5">
                                                <div class="form-group">
                                                    <label for="width">Width</label>
                                                    <input class="form-control" type="number" value="" id="width" name="width">
                                                </div>
                                            </div> --}}
    
                                            <div class="col-md-2 ">
                                                <div class="form-group">
                                                    <label for="price">Price</label>
                                                    <input class="form-control" type="number" value="" id="price" name="price" required>
                                                </div>
                                            </div>
                                           
    
    
                                        </div>
                                    </div>
                                    
                        </form>

                        
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary  active mt-5 align-center"  style="background-color:#f83b3b">
                            Submit
                        </button>
                       
                      
                    </div>
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
            <span>Madhur.</span>
          </a>
          <p>Courier Management System</p>
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
          <h3>Address</h3>
                  <p>Bhausinghji Road,</p>
                  <p>Kolhapur 416002</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+91 7596481236</span></p>
          <p><strong>Email:</strong> <span>madhur@gmail.com</span></p>
        </div>
        
      </div>
    </div>

   

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

@include('partials.footerscript2')

</body>

</html>