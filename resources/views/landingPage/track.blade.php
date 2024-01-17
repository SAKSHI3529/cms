@extends('layouts.cms2')
@section('title','Tracking Page')
@section('content')

<div data-aos="fade" class="page-title aos-init aos-animate">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Blog</h1>
            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Blog</li>
        </ol>
      </div>
    </nav>
  </div>
  
<div class="container mt-5 ">
    <div class="card">
      <div class="card-header">
        Tracking Details
      </div>
      <div class="card-body">
        <h5 class="card-title">Tracking Number: </h5>
        <p class="card-text">ABC123456</p>
      </div>

    </div>

    <div class="card">
      <div class="card-body">
        <div class="row justify-content-evenly">
            <div class="col-4">
                <h5 class="card-title">Sender Information</h5>

                <div class="form-group">
                    <label for="Address" style="font-size: medium">Name:</label>
                    <label for="senderAddress">//name</label>
                   
                </div>

                <div class="form-group">
                    <label for="Address" style="font-size: medium">Address:</label>
                    <label for="senderAddress">//senderAddress</label>
                   
                </div>
                <div class="form-group">
                    <label for="contact" style="font-size: medium">Contact:</label>
                    <label for="sendercontact">//sendercontact</label>
                    
                </div>

            </div>
            <div class="col-4">
                <h5 class="card-title">Receiver Information</h5>

                <div class="form-group">
                    <label for="Address" style="font-size: medium">Name:</label>
                    <label for="senderAddress">//name</label>
                   
                </div>

                <div class="form-group">
                    <label for="Address" style="font-size: medium">Address:</label>
                    <label for="senderAddress">//senderAddress</label>
                   
                </div>
                <div class="form-group">
                    <label for="contact" style="font-size: medium">Contact:</label>
                    <label for="sendercontact">//sendercontact</label>
                    
                </div>
            </div>
          </div>
        </div>
        
        <div class="card-body">

            <h4>Parsal Information</h4>
            <div class="row">

                <div class="col-md-2 ml-5 ">
                    <div class="form-group">
                        <label for="weight" style="font-size: medium" >Weight:</label><br>
                        <label for="weight">weight</label>
                        
                    </div>
                </div>

                <div class="col-md-2 mr-5">
                    <div class="form-group">
                        <label for="height" style="font-size: medium">Height:</label><br>
                        <label for="height">height</label>
                        
                    </div>
                </div>

                <div class="col-md-2 mr-5">
                    <div class="form-group">
                        <label for="length" style="font-size: medium">Length:</label><br>
                        <label for="length">length</label>
                        
                    </div>
                </div>

                <div class="col-md-2 mr-5">
                    <div class="form-group">
                        <label for="width" style="font-size: medium">Width:</label><br>
                        <label for="width">width</label>
                        
                    </div>
                </div>

                <div class="col-md-2 ">
                    <div class="form-group">
                        <label for="price" style="font-size: medium">Price:</label><br>
                        <label for="price">price</label>
                        
                    </div>
                </div>


            </div>
        </div>
  </div>
</div>

<div class="container mt-5">
    <div class="card border-start border-4 border-warning">
      <div class="card-body">
        <!-- Card content goes here -->
        <h5 class="card-title">Traking Number</h5>
        <p class="card-text">referanceNumber</p>
      </div>
    </div>

    <div class="container">
       

        <div class="row justify-content-evenly">
          <div class="col-4">
            <div class="form-group">
                <h4 class="card-title">Sender Information</h4>

                <div class="card-text">
                    <label for="fname" style="font-size: medium"> Name:</label>
                     <label for="senderName">senderName</label>
                </div>
                
                
                
            </div>

            <div class="form-group">
                <label for="Address" style="font-size: medium">Address:</label>
                <label for="senderAddress">senderAddress</label>
               
            </div>
            <div class="form-group">
                <label for="contact" style="font-size: medium">Contact:</label>
                <label for="sendercontact">sendercontact</label>
                
            </div>
          </div>
          
        </div>

  </div>
</div>
    




@endsection