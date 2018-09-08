@extends('master')
@section('title', ' | Gallery')

@include('partials.nav')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="margin-top: -40px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/gallery.jpg" alt="First slide">
      <div class="carousel-caption d-md-block">
        <h3 class=" text-left display-5 text-uppercase"><strong>Our Gallery</strong></h3>
        <p class="text-p text-white text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum vitae temporibus ab optio soluta deserunt velit ad, quisquam consequuntur itaque! </p>
       <!-- <div class="text-left"><button class="btn btnn ">JOIN US</button></div>-->
      </div><!-- carousel caption -->
    </div>
  </div>
@endsection


@section('main')

    <div class="container">
       <div class="row mt-5">
          <div class="col-md-12"><h4 class="text-center text-muted pb-5"> Our Wonderful Gallery</h4></div>
              
           @foreach($gallery as $galleries)
                <div class="col-6 col-md-6 pb-4">
                    <img src="/img/{{$galleries->image}}" alt="" class="img-fluid img-thumbnail animated zoomIn delay-1s ">
                </div>
          @endforeach
       </div>
    </div>

@endsection


@section('footer')

  @include('partials.footer')

@endsection