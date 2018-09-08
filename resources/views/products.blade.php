@extends('master')
@section('title', ' | Business')

@include('partials.nav')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="margin-top: -40px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/123.jpg" alt="First slide">
      <div class="carousel-caption d-md-block">
        <h3 class=" text-left display-5 text-uppercase"><strong>Our Business</strong></h3>
        <p class="text-p text-white text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum vitae temporibus ab optio soluta deserunt velit ad, quisquam consequuntur itaque! </p>
       <!-- <div class="text-left"><button class="btn btnn ">JOIN US</button></div>-->
      </div><!-- carousel caption -->
    </div>
  </div>
@endsection



@section('main')

  
  <div class="container">
     <div class="row mt-5">
         
         <div class="col-12 col-md-3 pb-3">
             <h5 class="font-weight-bold text-muted"><strong>DOWNLOAD</strong> <strong style=" color: #fec20c;">FORMS</strong></h5>
             <hr style="background-color: #fec20c;">

              <a href="/documents/Breaking the chains of sexual sins.pdf" class="text-muted">Membership Form  &nbsp;  &nbsp; <i class="fa fa-file-pdf-o" style=" font-size: 20px;" ></i></a>
              <hr style="background-color: #fec20c;">

              <a href="/documents/Breaking the chains of sexual sins.pdf" class="text-muted">Loan Application Form  &nbsp;  &nbsp; <i class="fa fa-file-pdf-o" style=" font-size: 20px;" ></i></a>
              <hr style="background-color: #fec20c;">

              <a href="/documents/Breaking the chains of sexual sins.pdf" class="text-muted">Child Savings Form  &nbsp;  &nbsp; <i class="fa fa-file-pdf-o" style=" font-size: 20px;" ></i> </a>
              <hr style="background-color: #fec20c;">

              <a href="/documents/Breaking the chains of sexual sins.pdf" class="text-muted">Emergency Loan  &nbsp;  &nbsp; <i class="fa fa-file-pdf-o" style=" font-size: 20px;" ></i></a>
              <hr style="background-color: #fec20c;">

         </div>

         <div class="col-md-5">
                <div class=" pb-4"><i class=" icon-profile-female " style="color: #fec20c;"></i></div>
                <h5 class="text-muted tex-center" >CUSTOMER <span style=" color: #fec20c;">SUPPORT</span></h5>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi, iure eveniet animi, commodi doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus esse non cupiditate, mollitia nostrum, alias ex suscipit eius aspernatur tempora.</p>
          </div>

          <div class="col-md-4">
                <div class=" pb-4"><i class=" icon-profile-male " style="color: #fec20c;"></i></div>
                <h5 class="text-muted tex-center" >CUSTOMER <span style=" color: #fec20c;">SUPPORT</span></h5>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi, iure eveniet animi, commodi doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus esse non cupiditate, mollitia nostrum, alias ex suscipit eius aspernatur tempora.</p>
          </div>

     </div><!-- end of row -->
  </div>


@endsection



@section('footer')

  @include('partials.footer')

@endsection