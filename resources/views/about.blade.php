@extends('master')
@section('title', ' | About Us')

@include('partials.nav')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="margin-top: -40px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/blog.jpg" alt="First slide">
      <div class="carousel-caption d-md-block">
        <h3 class=" text-left display-5 text-uppercase"><strong>About Us</strong></h3>
        <p class="text-p text-white text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum vitae temporibus ab optio soluta deserunt velit ad, quisquam consequuntur itaque! </p>
       <!-- <div class="text-left"><button class="btn btnn ">JOIN US</button></div>-->
      </div><!-- carousel caption -->
    </div>
  </div>
@endsection


@section('main')

<div class="container">
	<div class="row mt-5">
		 <h4 class="text-muted text-center pb-3 pl-2 pr-2">History</h4>
		 <p class="pb-3 pl-2 pr-2 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, veniam, voluptatibus quos pariatur quibusdam harum porro, itaque rerum vel cumque repudiandae vitae minima possimus reprehenderit distinctio! Deleniti labore dolorem nam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque illum similique odio temporibus porro doloribus quia, saepe ut sint voluptate!</p>

		 <p class="pb-3 pl-2 pr-2 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque illum similique odio temporibus porro doloribus quia, saepe ut sint voluptate! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, culpa laboriosam voluptatibus, dolore mollitia ducimus.</p>
	</div><!-- end of row -->

	 <div class="row mt-5">
	 	<h4 class="text-muted col-md-12 text-center pb-3">Our Services </h4>
            <div class="col-md-4">
                <div class="text-center pb-4"><i class=" icon-linegraph " style="color: #fec20c;"></i></div>
                <h5 class="text-muted text-center">WHO WE ARE</h5>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi, iure eveniet animi, commodi doloremque!</p>
            </div>
            <div class="col-md-4">
                 <div class="text-center pb-4"><i class=" icon-globe " style="color: #fec20c;"></i></div>
                <h5 class="text-muted text-center">WHY CHOOSE US</h5>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi, iure eveniet animi, commodi doloremque!</p>
            </div>
            <div class="col-md-4">
                 <div class="text-center pb-4"><i class=" icon-genius " style="color: #fec20c;"></i></div>
                <h5 class="text-muted text-center">WHO CAN JOIN US</h5>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi, iure eveniet animi, commodi doloremque!</p>
            </div>
        </div><!-- end of row -->


        <div class="row">
        	<div class="col-md-4">
                <div class="text-center pb-4"><i class=" icon-target " style="color: #fec20c;"></i></div>
                <h5 class="text-muted text-center">LOANS</h5>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi, iure eveniet animi, commodi doloremque!</p>
            </div>
            <div class="col-md-4">
                 <div class="text-center pb-4"><i class=" icon-anchor " style="color: #fec20c;"></i></div>
                <h5 class="text-muted text-center">SAVINGS</h5>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi, iure eveniet animi, commodi doloremque!</p>
            </div>
            <div class="col-md-4">
                 <div class="text-center pb-4"><i class=" icon-beaker " style="color: #fec20c;"></i></div>
                <h5 class="text-muted text-center">ORDINARY SHARES</h5>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi, iure eveniet animi, commodi doloremque!</p>
            </div>
        </div><!-- end of row -->
</div>

@endsection


@section('footer')

  @include('partials.footer')

@endsection