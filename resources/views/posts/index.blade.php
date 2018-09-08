@extends('master')
@section('title', ' | Blog Page')

@include('partials.nav')
@include('partials.banner')


@section('main')

<div class="container">
   <div class="row" style="margin-top: 100px;">

    <div class="col-md-12"><h4 class="text-center text-muted pb-5"> Our Blog </h4></div>

  @foreach($posts as $post) 
    <div class="col-md-4 pb-5">
      <div class="card">
        <a href="/posts/ {{ $post->id}}"><img class="card-img-top" src="/img/{{ $post->image}}" alt="Card image cap" width="250" height="250"></a>
        <div class="card-body">
           <a href="/posts/ {{ $post->id}}"><h5 class="card-title">{{  $post->title }}</h5></a>
          <p class="card-text text-justify">{!! substr(strip_tags($post->body), 0, 100)  !!} ...</p>
          <a href="/posts/ {{ $post->id}}" class=" text-muted">Tell me more &rarr; </a>
          <p class="float-right"><small>Posted in <span class="text-muted"> {{ $post->category->name}} </span></small></p>
        </div>
      </div><!-- end of card -->
    </div>
  @endforeach  

</div>
</div>


@endsection


@section('footer')

  @include('partials.footer')

@endsection

