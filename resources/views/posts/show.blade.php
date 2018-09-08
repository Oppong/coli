@extends('master')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', " | $titleTag" )
@include('partials.nav')

@section('content')
 
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -35px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="img-container" style="background-color: #000000;"><img class="d-block w-100" src="/img/{{ $post->image}}" alt="First slide" width="1400" height="500" style="opacity: 0.2;"></div>
      <div class="carousel-caption d-md-block">
        <h3 class=" text-left display-5 first"><strong>{{$post->title}}</strong></h3>
        <p class="text-p text-white text-left">{{ substr(strip_tags($post->body), 0, 210)  }} </p>
      </div><!-- carousel caption -->
    </div>
  </div>

@endsection

@section('main')  
    <div class="col-md-8 offset-md-2 mt-5">
            <br><br>
            <h3 class="text-capitalize font-weight-bold" style=" color: #fec20c;">{{  $post->title }}</h3>
            <p>Posted by <strong style=" color: #fec20c;"> {{--{{ $post->user->name}}--}} Administrator </strong> on <small><strong> {{ $post->created_at->toFormattedDateString()}}</strong></small></p>
            <p class="text-justify">   {!! ($post->body)  !!} </p>
            <p class="text-muted"> Posted In <span style=" color: #fec20c;">{{ $post->category->name}}</span> Category</p>  
          
          <!-- end of blog-->
     <br>

    <!-- comments ssection -->
  <h5><strong>Post Comment</strong> </h5>
  <br>


  <form action="/comments/{{ $post->id}}" method="Post" class="p-2">
       {{ csrf_field() }}
      <div class="form-group">
          <label for="name"> Your Name </label>
          <input type="text" id="name" name="name" class="form-control" required>
      </div>
       <div class="form-group">
          <label for="body"> Your Comment </label>
          <textarea name="body" id="" cols="20" rows="5" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btnn">Post Comment</button>
      </div>
  </form>


      <br>
      <h5><strong style=" color:#2BBBAD;">{{ $post->comments->count() }} </strong> Comment(s) for this Post. </h5>
      <br>
     @foreach($post->comments as $comment)
        <div class=" p-2">
          <p> <strong style=" color:#2BBBAD;">{{ $comment->name }}</strong> &nbsp; <span class="text-muted">{{$comment->created_at->toDayDateTimeString() }}</span> </p>
          <p>{{ $comment->body }}</p>
       </div><!-- end -->

   
       <button class="btn btnn-rep mb-4 toggle-reply "> Reply </button>

      <div class="comment-reply">
               <form action="/reply/{{ $comment->id }}" method="POST" >
                   {{ csrf_field()}}
                   <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" name="name" class="form-control" id="name">
                   </div>
                   <div class="form-group">
                     <label for="body"> Your Reply </label>
                     <textarea name="body" id="" cols="20" rows="5" class="form-control" required></textarea>
                   </div>
                   <div class="form-group">
                      <button type="submit" class="btn btnn-rep">Reply Comment</button>
                   </div>
               </form>
    </div><!-- end of comment reply -->




           <p><strong style=" color:#2BBBAD;">{{ $comment->replies->count()}}</strong> Reply(s) for this Post </p>
          @foreach($comment->replies as $reply)        
                <div class="nice mt-2 ml-5">
                      <p> <strong style=" color:#2BBBAD;">{{ $reply->name }}</strong> &nbsp; <span class="text-muted">{{$comment->created_at->toDayDateTimeString() }}</span> </p>
                      <p>{{ $reply->body }}</p>
                </div><!-- end of nice -->
          @endforeach
  
      @endforeach
  

  @endsection

@section('footer')

  @include('partials.footer')

@endsection

@section('scripts')
   
    <script src="{{ asset('js/jquery.js')}}"></script>

   <script>
         $(".toggle-reply").click(function() {

                $(this).next().slideToggle();

         });
      </script>

@endsection

