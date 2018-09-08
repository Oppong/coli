@extends('master')
@section('title', ' | Contact Us')

@include('partials.nav')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="margin-top: -40px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/123.jpg" alt="First slide">
      <div class="carousel-caption d-md-block">
        <h3 class=" text-left display-5 text-uppercase"><strong>Contact Us</strong></h3>
        <p class="text-p text-white text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum vitae temporibus ab optio soluta deserunt velit ad, quisquam consequuntur itaque! </p>
       <!-- <div class="text-left"><button class="btn btnn ">JOIN US</button></div>-->
      </div><!-- carousel caption -->
    </div>
  </div>
@endsection

@section('main')
     
     <div class="container">
         <div class="row mt-5">
            <div class="col-md-4 pb-3">
                <h5 class="text-muted">CONTACT US</h5>
                <p class="text-justify">  <strong>Lorem Micro Finance, Techiman</strong></p>
                <address class="text-justify"> Techiman, Opposite Ghana Revenue Authority <br>Telephone:+23312345678 <br> Mobile:+23312345678 <br> Email:info@microfinance.com <br> Website:www.microfinace.com</address>
                
            </div>
            <div class="col-md-4 pb-3">
                <h5 class="text-muted">CUSTOMER SUPPORT</h5>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi, iure eveniet animi, commodi doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus esse non cupiditate, mollitia nostrum, alias ex suscipit eius aspernatur tempora.</p>

                <p class="text-justify"> commodi doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus esse non cupiditate, mollitia nostrum, alias ex suscipit eius aspernatur tempora.</p>
            </div>

             <div class="col-md-4 pb-3">
               <h5 class="text-muted">SEND US A MESSAGE</h5>
                  <form action="/contact" method="POST">
                       <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="eg. Amponsah">
                       </div>

                       <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" class="form-control" placeholder="eg. info@example.com" id="email">
                       </div>

                       <div class="form-group">
                          <label for="subject">Subject</label>
                          <input type="text" name="subject" class="form-control" id="subject">
                       </div>

                       <div class="form-group">
                          <label for="message">Mesage</label>
                          <textarea class="form-control" name="body" id="message"></textarea>
                       </div>

                       <div class="form-group">
                          <button class="btn btn-sm btn-pill btn-outline-secondary">Submit</button>
                       </div>

                  </form>
             </div>
        </div><!-- end of row -->
     </div>
        

@endsection




@section('footer')

  @include('partials.footer')

@endsection