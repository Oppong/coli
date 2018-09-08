@extends('master')
@section('title', ' | Homepage')

@include('partials.nav')
@include('partials.banner')

@section('content')
     
     <div class="container">
         <div class="row mt-5">
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
     </div><!-- end of container -->
        

@endsection


@section('main')
<div class="container-fluid mt-5" style="background-color: #f5f5f4;">
   <div class="container">
       <div class="row pt-5 pb-5">
            <div class="col-md-6 pb-3">
                <img src="/img/together.jpg" alt="" class="img-fluid img-thumbnail">
            </div>
            <div class="col-md-6">
                <h5 class="text-muted tex-center" >CUSTOMER <span style=" color: #fec20c;">SUPPORT</span></h5>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi, iure eveniet animi, commodi doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus esse non cupiditate, mollitia nostrum, alias ex suscipit eius aspernatur tempora.</p>

                <p class="text-justify"> commodi doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus esse non cupiditate, mollitia nostrum, alias ex suscipit eius aspernatur tempora.</p>
            </div>
        </div><!-- end of row -->
   </div><!-- end of container -->
</div><!-- end of container-fluid -->
@endsection


@section('another')

    <div class="container">
       <div class="row mt-5">
            <div class="col-md-6 mt-5">
                <div class=" pb-4"><i class=" icon-profile-female " style="color: #fec20c;"></i></div>
                <h5 class="text-muted tex-center" >CUSTOMER <span style=" color: #fec20c;">SUPPORT</span></h5>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi, iure eveniet animi, commodi doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus esse non cupiditate, mollitia nostrum, alias ex suscipit eius aspernatur tempora.</p>
            </div>

            <div class="col-md-6 mt-5">
                <div class=" pb-4"><i class=" icon-telescope " style="color: #fec20c;"></i></div>
                <h5 class="text-muted tex-center" >LATEST <span style=" color: #fec20c;">NEWS</span></h5>

            @foreach($posts as $post)
                <h6>{{  $post->title }} <br><p class="text-justify">{!! substr(strip_tags($post->body), 0, 100)  !!} ...</p> </h6>
            @endforeach
        
            </div>

       </div><!-- end of row -->
   </div><!-- end of container -->


@endsection

@section('footer')

  @include('partials.footer')

@endsection
