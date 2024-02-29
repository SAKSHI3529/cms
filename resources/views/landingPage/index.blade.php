@extends('layouts.cms2')
@section('title','Landing Page')
@section('content')
      
    
      <main id="main">
    
        <!-- Hero Section - Home Page -->
        <section id="hero" class="hero">
          <img src="{{url('assets2/img/my-img/home-bg2.jpg')}}" alt="" data-aos="fade-in" class="aos-init aos-animate">
    
          <div class="container">
            <div class="row">
              <div class="col-lg-10">
               
                <div class="sent-message">@include('flash::message')</div>

                <h2 data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">Track Your Package</h2>
                <p data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">Enter your 10 digit Referance Number</p>
               
                
              </div>
              <div class="col-lg-5">
                <form  class="sign-up-form d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" onsubmit="return false;">
                  <input type="text" class="form-control" placeholder="Enter Referance Number Here" id="searchrefno">
                  <button class="btn btn-primary" type="submit" onclick="searchParcel()" style="background-color: #e84545; border:none"><i class="fa-fa-search" ></i> Search</button>
                </form>
              </div>
            </div>
          </div>
    
        </section><!-- End Hero Section -->
    
  {{-- About section start --}}
  <section id="about" class="about">
  
      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">
  
          <div class="col-xl-12 content">
            <h3>About Us</h3>
            <h2>Madhur Transport</h2>
            <p>Established in the year 2001, Madhur Courier Services in Bhausinghji Road, Kolhapur is a top player in the category Courier Services For Africa in the Kolhapur. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Kolhapur. Over the course of its joumey, this business has established a firm foothold in it's industry products and services, have helped this establishment garner a vast base.<br> The belief that customer satisfaction is as important tas their of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective rales and put in a lot of effort to In the near future, this business aims occupies a prominent location in readily available.{{-- It is to expand its line of products Bhausinghji Road. and services achieve the common vision and larger goals of the and cater to a It is an effortless taski kin commuting to at CPR Hospital Road, Near Pudhari Office, which makes it easy provide top service in the larger client base.in this establishment os company Kolhapur, this establishment there are various modes of transport for first-time visitors in locoting this establishment, it is known to following categories: Courier Services, Domestic Courier Services, International Courier Services Courier Services For Pune Courier Services For Mumbai, Courier Services Speed Post, Courier Services For Bangalore,Mumbai,And many more.--}}
              .</p>
            {{-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> --}}
          </div>
  
          {{-- <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">
  
              <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  
                  <h3>Order Processing:</h3>
                  <p>Collecting and managing customer details for order processing.
                    Recording and processing incoming orders.
                    Sending order confirmation notifications to customers.</p>
                </div>
              </div> <!-- End Icon Box --> --}}
  
              {{-- <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-clipboard-pulse"></i>
                  <h3>Package Tracking:</h3>
                  <p>Assigning unique identifiers for tracking.
                    Providing real-time updates on package status and location.</p>
                </div>
              </div> <!-- End Icon Box --> --}}
  
              {{-- <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
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
   --}}
            </div>
          </div>
  
        </div>
      </div>
  
    </section>
  {{-- About section end --}}


  <section class="price container" id="price">
    <div class="row">
    <div class="col-md-6 content">
    <aside >
      <section id="courier-charges" itemscope="" itemtype="https://schema.org/Table">
      <table class="table table-striped" style="text-align:center; vertical-align: middle;">
  <h3 itemprop="about" class="widget-title">Courier Charges</h3>
  <thead><tr><th title="Weight">Weight</th><th title="Express Courier">Express Charges</th><th title="Economy Courier">Economy Charges</th></tr></thead>
          <tbody><tr><td title="1Kg"> 0-1 Kg </td><td><a href="" title="Express courier charges  for Pune for 1Kg" class="reserve-button scroll-to"><b>₹ 49</b></a></td><td><a href="" title="Economy courier charges  for Pune for 1Kg" class="reserve-button scroll-to"><b>₹ 24</b></a></td></tr>
          <tr><td title="2Kg"> 1-2 Kg</td><td><a href="" title="Express courier charges  for Pune for 2Kg" class="reserve-button scroll-to"><b>₹ 96</b></a></td><td><a href="" title="Economy courier charges  for Punefor 2Kg" class="reserve-button scroll-to"><b>₹ 45</b></a></td></tr>
          <tr><td title="3Kg"> 2-5 Kg</td><td><a href="" title="Express courier charges  for Pune for 3Kg" class="reserve-button scroll-to"><b>₹ 142</b></a></td><td><a href="" title="Economy courier charges  for Punefor 3Kg" class="reserve-button scroll-to"><b>₹ 93</b></a></td></tr>
          <tr><td title="5Kg"> 5-10 Kg</td><td><a href="" title="Express courier charges  for Pune fro 5Kg" class="reserve-button scroll-to"><b>₹ 193</b></a></td><td><a href="" title="Economy courier charges  for Punefor 5Kg" class="reserve-button scroll-to"><b>₹ 145</b></a></td></tr>
          <tr><td title="10Kg"> 10-15 Kg</td><td><a href="" title="Express courier charges  for Pune for 10Kg" class="reserve-button scroll-to"><b>₹ 345</b></a></td><td><a href="" title="Economy courier charges  for Punefor 10Kg" class="reserve-button scroll-to"><b>₹ 296</b></a></td></tr>
         <tr><td title="25Kg"> 15-25 Kg</td><td><a href="" title="Express courier charges  for Pune for 25Kg" class="reserve-button scroll-to"><b>₹ 746</b></a></td><td><a href="" title="Economy courier charges  for Punefor 15kg" class="reserve-button scroll-to"><b>₹ 595</b></a></td></tr>
         <tr><td title="50Kg"> 25-50 Kg</td><td><a href="" title="Express courier charges  for Punefor 50Kg" class="reserve-button scroll-to"><b>₹ 1093</b></a></td><td><a href="" title="Economy courier charges  for Punefor 25kg" class="reserve-button scroll-to"><b>₹ 741</b></a></td></tr>
  </tbody></table>
      </section>
      </aside>
    </div>

      <div class="col-md-6">
      <aside>
        <section id="courier-charges" itemscope="" itemtype="https://schema.org/Table">
        <table class="table table-striped" style="text-align:center; vertical-align: middle;">
    <h2 itemprop="about" class="widget-title">Delivery Time </h2>
    <thead><tr><th title="Weight">Weight</th><th title="Express Delivery Time">Express Delivery</th><th title="Economy Delivery Time">Economy Delivery</th></tr></thead>
            <tbody><tr><td title="1-5Kg">1-5 Kg </td><td><a href="" title="Express Delivery Time  for Pune for 1-5Kg" class="reserve-button scroll-to"><b>2-3 Days</b></a></td><td><a href="" title="Economy Delivery Time  for Pune for 1-5Kg" class="reserve-button scroll-to"><b>4-5 Days</b></a></td></tr>
            <tr><td title="5-15Kg">5-15 Kg</td><td><a href="" title="Express Delivery Time  for Pune for 5-15Kg" class="reserve-button scroll-to"><b>5-6 Days</b></a></td><td><a href="" title="Economy Delivery Time  for Punefor 5-15Kg" class="reserve-button scroll-to"><b>7-10 Days</b></a></td></tr>
            <tr><td title="15-50Kg">15-50 Kg</td><td><a href="" title="Express Delivery Time  for Pune for 15-50Kg" class="reserve-button scroll-to"><b>7-10 Days</b></a></td><td><a href="" title="Economy Delivery Time  for Punefor 15-50Kg" class="reserve-button scroll-to"><b>12-15 Days</b></a></td></tr>
            
    </tbody></table>
        </section>
        </aside>
      </div>
    </div>

    <aside class="alert alert-danger" role="alert">
      <div id="important-note-3" class="willalert">
      <h2 class="widget-title" style="text-align:center">Important Points</h2>
      <table class="table-danger"><tbody><tr><td><b>Our Policy &amp; Government Tax/Duty</b></td></tr>
      <tr>
   <td>
          <p><span class="glyphicon glyphicon-info-sign" ><i class="bi bi-exclamation-circle-fill"></i></span>&nbsp;Rates are inclusive of GST as per government rule</p>
          <p><span class="glyphicon glyphicon-info-sign"><i class="bi bi-exclamation-circle-fill"></i></span>&nbsp;Charges are based on higher side of Size or Weight.</p>
          <p><span class="glyphicon glyphicon-info-sign"><i class="bi bi-exclamation-circle-fill"></i></span>&nbsp;Payment need to make after pickup or during the pickup.</p>
          <p><span class="glyphicon glyphicon-info-sign"><i class="bi bi-exclamation-circle-fill"></i></span>&nbsp;Consignee will have to pay custom duty if charged by govt.</p>
          <p><span class="glyphicon glyphicon-info-sign"><i class="bi bi-exclamation-circle-fill"></i></span>&nbsp;Madhur Courier Will not be responsible for any delays if the shimpent got delayed due to National &amp; religious Holidays, inclement weather conditions</p>
       </td></tr>
       </tbody></table>
      </div>
     </aside>
  </section>
  
  
  <section id="services" class="services">

  
      <!--  Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Services</h2>
      
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
  
         
  
        </div>
  
      </div>
  
    </section>



    
  
  
  
    
  
  
    <section id="contact" class="contact">
  
      <!--  Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Review</h2>
  
        <section id="testimonials" class="testimonials">
  
          <div class="container">
    
            <div class="row align-items-center">
    
              <div class="col-lg-5 info aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <h3>Review</h3>
                <p>
                  Our customer's valuable feedback and reviews.
 
                </p>
              </div>
    
              <div class="col-lg-7 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
    
                <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                  <template class="swiper-config">
                    {
                    "loop": true,
                    "speed" : 600,
                    "autoplay": {
                    "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                    }
                    }
                  </template>
                  <div class="swiper-wrapper" id="swiper-wrapper-9ec10bf224c255108e" aria-live="off" style="transform: translate3d(-4872px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 5">
                      <div class="testimonial-item">
                        <div class="d-flex">
                          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                          <div>
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                          </div>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                    @foreach ($reviews as $review)
                    <div class="swiper-slide"role="group" >
                      <div class="testimonial-item">
                        <div class="d-flex">
                          <img src="assets2/my-img/profile-img.png" class="testimonial-img flex-shrink-0" alt="">
                          <div>
                            <h3>{{$review->name}}</h3>
                            <h4>{{$review->created_at}}</h4>
                            {{-- <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div> --}}
                          </div>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          <span>{{$review->message}}</span>
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div><!-- End testimonial item -->
                    @endforeach
                   
                    {{-- <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 5">
                      <div class="testimonial-item">
                        <div class="d-flex">
                          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                          <div>
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                          </div>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div><!-- End testimonial item -->
    
                    <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 5">
                      <div class="testimonial-item">
                        <div class="d-flex">
                          <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                          <div>
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                          </div>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div><!-- End testimonial item -->
    
                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group" aria-label="3 / 5">
                      <div class="testimonial-item">
                        <div class="d-flex">
                          <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                          <div>
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                          </div>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div><!-- End testimonial item -->
    
                    <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="3" role="group" aria-label="4 / 5">
                      <div class="testimonial-item">
                        <div class="d-flex">
                          <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                          <div>
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                          </div>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div><!-- End testimonial item -->
    
                    <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 5">
                      <div class="testimonial-item">
                        <div class="d-flex">
                          <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                          <div>
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                          </div>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div><!-- End testimonial item --> --}}
    
               </div>
                  <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    
              </div>
    
            </div>
    
          </div>
    
        </section>
        
      </div><!-- End Section Title --> 
  
      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
  
        <div class="row gy-4">
  
          <div class="col-lg-6">
  
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Bhausinghji Road,</p>
                  <p>Kolhapur 416002</p>
                </div>
              </div><!-- End Info Item -->
  
              <div class="col-md-6">
                <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+91 7596481236</p>
                  <p>+91 8659412358</p>
                </div>
              </div><!-- End Info Item -->
  
              <div class="col-md-6">
                <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                 
                  <p>madhurtransports@gmail.com</p>
                </div>
              </div><!-- End Info Item -->
  
              <div class="col-md-6">
                <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Saturday</p>
                  <p>10:00 - 09:00PM</p>
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
  
  
   
    
      <!-- Scroll Top Button -->
      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-up-short"></i></a>
    
      <!-- Preloader -->
      
    
     
    <script>
      var url= @json(url('/'));
      function searchParcel(){
        var refno = document.getElementById('searchrefno').value;
        // console.log(asd)
        window.location.href = url+"/track/"+refno;


      }
      </script>
    
    
  

    @endsection