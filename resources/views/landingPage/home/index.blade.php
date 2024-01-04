<html lang="en"><head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Home - Append Bootstrap Temlate</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="{{url('assets2/img/favicon.png" rel="icon')}}">
    <link href="{{url('assets2/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="{{url('assets2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets2/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('assets2/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('assets2/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{url('assets2/vendor/aos/aos.css')}}" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{url('assets2/css/main.css')}}" rel="stylesheet">
  
    <!-- =======================================================
    * Template Name: Append
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>
  
  <body class="index-page scrolled" data-bs-spy="scroll" data-bs-target="#navmenu" data-aos-easing="ease-in-out" data-aos-duration="600" data-aos-delay="0">
  
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="container-fluid d-flex align-items-center justify-content-between">
  
        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="{{url('assets2/img/logo.png')}}" alt=""> -->
          <h1>Madhur</h1>
          <span>.</span>
        </a>
  
        <!-- Nav Menu -->
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.html#hero" class="active">Home</a></li>
            <li><a href="index.html#about" class="">About</a></li>
            <li><a href="index.html#services">Services</a></li>
            <li><a href="index.html#portfolio">Portfolio</a></li>
            
            
            <li><a href="index.html#contact">Contact</a></li>
          </ul>
  
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav><!-- End Nav Menu -->
  
        <a class="btn-getstarted" href="index.html#about">Sign Up</a>
  
      </div>
    </header><!-- End Header -->
  
    <main id="main">
  
      <!-- Hero Section - Home Page -->
      <section id="hero" class="hero">
  
        <img src="{{url('assets2/img/my-img/home-bg.jpg')}}" alt="" data-aos="fade-in" class="aos-init aos-animate">
  
        <div class="container">
          <div class="row">
            <div class="col-lg-10">
              <h2 data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">Track Your Package</h2>
              <p data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">Enter your 10 digit Referance Number</p>
            </div>
            <div class="col-lg-5">
              <form action="#" class="sign-up-form d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <input type="text" class="form-control" placeholder="Enter Referance Number Here">
                <input type="submit" class="btn btn-primary" value="Search"><i class="fa-fa-search"></i>
              </form>
            </div>
          </div>
        </div>
  
      </section><!-- End Hero Section -->
  
{{-- About section start --}}
<section id="about" class="about">

    <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-xl-center gy-5">

        <div class="col-xl-5 content">
          <h3>About Us</h3>
          <h2>Ducimus rerum libero reprehenderit cumque</h2>
          <p>Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime. Enim reiciendis minus et rerum hic non. Dicta quas cum quia maiores iure. Quidem nulla qui assumenda incidunt voluptatem tempora deleniti soluta.</p>
          <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="col-xl-7">
          <div class="row gy-4 icon-boxes">

            <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <i class="bi bi-buildings"></i>
                <h3>Order Processing:</h3>
                <p>Collecting and managing customer details for order processing.
                  Recording and processing incoming orders.
                  Sending order confirmation notifications to customers.</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <i class="bi bi-clipboard-pulse"></i>
                <h3>Package Tracking:</h3>
                <p>Assigning unique identifiers for tracking.
                  Providing real-time updates on package status and location.</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <i class="bi bi-command"></i>
                <h3>Veniam omnis</h3>
                <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur corrupti</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <i class="bi bi-graph-up-arrow"></i>
                <h3>Delares sapiente</h3>
                <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p>
              </div>
            </div> <!-- End Icon Box -->

          </div>
        </div>

      </div>
    </div>

  </section>
{{-- About section end --}}


<section id="services" class="services">

    <!--  Section Title -->
    <div class="container section-title aos-init aos-animate" data-aos="fade-up">
      <h2>Services</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
            <div>
              <h4 class="title"><a href="services-details.html" class="stretched-link">FAST TRACK</a></h4>
              <p class="description"> High Priority is urgent delivery service within 24 or 48 hours (depending on the destination) for urgent documents and packages.

              </p>
            </div>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
            <div>
              <h4 class="title"><a href="services-details.html" class="stretched-link">CONTRACT BOOKING</a></h4>
              <p class="description">Bulk Couriers with free daily pickup and monthly billings.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
            <div>
              <h4 class="title"><a href="services-details.html" class="stretched-link">PROOF OF DELIVERY</a></h4>
              <p class="description">Immediate Delivery available online.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
            <div>
              <h4 class="title"><a href="services-details.html" class="stretched-link">EXPRESS COURIER SERVICES </a></h4>
              <p class="description">Express Services for delivering documents and small parcels with an domestic/international logistic network.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        {{-- <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
            <div>
              <h4 class="title"><a href="services-details.html" class="stretched-link">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
            <div>
              <h4 class="title"><a href="services-details.html" class="stretched-link">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div><!-- End Service Item --> --}}

      </div>

    </div>

  </section>


  <section id="features" class="features">

    <!--  Section Title -->
    <div class="container section-title aos-init aos-animate" data-aos="fade-up">
      <h2>Features</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4 align-items-center features-item">
        <div class="col-lg-5 order-2 order-lg-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <h3>Corporis temporibus maiores provident</h3>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
          </p>
          <a href="#" class="btn btn-get-started">Get Started</a>
        </div>
        <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out" data-aos-delay="100">
          <div class="image-stack">
            <img src="assets/img/features-light-1.jpg" alt="" class="stack-front">
            <img src="assets/img/features-light-2.jpg" alt="" class="stack-back">
          </div>
        </div>
      </div><!-- Features Item -->

      <div class="row gy-4 align-items-stretch justify-content-between features-item ">
        <div class="col-lg-6 d-flex align-items-center features-img-bg aos-init aos-animate" data-aos="zoom-out">
          <img src="assets/img/features-light-3.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-5 d-flex justify-content-center flex-column aos-init aos-animate" data-aos="fade-up">
          <h3>Sunt consequatur ad ut est nulla</h3>
          <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
          <ul>
            <li><i class="bi bi-check"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
            <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
            <li><i class="bi bi-check"></i> <span>Facilis ut et voluptatem aperiam. Autem soluta ad fugiat</span>.</li>
          </ul>
          <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
        </div>
      </div><!-- Features Item -->

    </div>

  </section>




  <section id="pricing" class="pricing">

    <!--  Section Title -->
    <div class="container section-title aos-init aos-animate" data-aos="fade-up">
      <h2>Pricing</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">

      <div class="row g-4">

        <div class="col-lg-4">
          <div class="pricing-item">
            <h3>Free Plan</h3>
            <div class="icon">
              <i class="bi bi-box"></i>
            </div>
            <h4><sup>$</sup>0<span> / month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4">
          <div class="pricing-item featured">
            <h3>Business Plan</h3>
            <div class="icon">
              <i class="bi bi-rocket"></i>
            </div>

            <h4><sup>$</sup>29<span> / month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
              <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4">
          <div class="pricing-item">
            <h3>Developer Plan</h3>
            <div class="icon">
              <i class="bi bi-send"></i>
            </div>
            <h4><sup>$</sup>49<span> / month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
              <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

      </div>

    </div>

  </section>


  <section id="contact" class="contact">

    <!--  Section Title -->
    <div class="container section-title aos-init aos-animate" data-aos="fade-up">
      <h2>Review</h2>
      
    </div><!-- End Section Title -->

    <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>A108 Adam Street</p>
                <p>New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
                <p>+1 6678 254445 41</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com</p>
                <p>contact@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="500">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday</p>
                <p>9:00AM - 05:00PM</p>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>
      




        <div class="col-lg-6">
          <form action="{{url('/reviewsubmited')}}" method="post" class=" aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            @csrf
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" value="">
                @if($errors->has('email'))
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                @endif
              </div>

              

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                
                <div class="error-message"></div>
                <div class="sent-message">@include('flash::message')</div>

                {{-- <button type="submit" class="btn-getstarted" >Send Message</button> --}}
                <button type="submit"  
                style="background: var(--primary-color);
                color: var(--contrast-color);
                border: 0;
                padding: 10px 30px;
                transition: 0.4s;
                border-radius: 4px;">
                Send Messages</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section>


  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Append</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
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

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1">Append</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>
  
    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Preloader -->
    
  
    <!-- Vendor JS Files -->
    <script src="{{url('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets2/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{url('assets2/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{url('assets2/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('assets2/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{url('assets2/vendor/aos/aos.js')}}"></script>
    <script src="{{url('assets2/vendor/php-email-form/validate.js')}}"></script>
  
    <!-- Template Main JS File -->
    <script src="{{url('assets2/js/main.js')}}"></script>
  
  
  
  </body></html>