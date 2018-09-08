<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -16px;">
  <ol class="carousel-indicators">
    @foreach($sliders as $slider)
      <li data-target="#carouselExampleIndicators" data-slide-to={{ $loop->index}} class="{{$loop->first ? 'active' : ''}}"></li>
    @endforeach
    {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> --}}
  </ol>

  <div class="carousel-inner">
    @foreach($sliders as $key => $slider)
    <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
      <div class="img-container" style="background-color: #000000;"><img class="d-block w-100 animated fadeIn" src="/img/{{ $slider->image}}" alt="First slide" ></div>
        <div class="carousel-caption d-md-block">
        <h3 class=" text-left display-5 text-uppercase animated fadeInLeft delay-1s"><strong>{{ $slider->title}}</strong></h3>
        <p class="text-p text-white text-left animated fadeInRight delay-1s">{{ $slider->body}}</p>
       {{-- <div class="text-left"><button class="btn btn-pill btn-sm btnn">JOIN US</button></div> --}}
      </div><!-- carousel caption -->
    </div>
    @endforeach
  </div>

</div>
