@extends('admin.index')


@section('content')
 
 <div class="card p-3">
   <div class="card-header bg-light">
     <h4 class="m-0 text-center">Edit Slider </h4>
   </div>
  <div class="col-md-8 offset-md-2">
       <form action="{{ route('slider.update',  $slider->id )}}" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="_method" value="PATCH">

         {{ csrf_field() }}

        <div class="form-group">
          <label for="title"> Title</label>
          <input type="text" name="title" id="title" class="form-control" value="{{ $slider->title}}">
        </div>
        <div class="form-group">
          <label for="body"> Paragraph  </label>
          <input type="text" name="body" id="body" class="form-control" value="{{ $slider->body}}">
        </div>
        <div class="form-group">
         <label for="image">Upload Image</label>
         <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update Slider</button>
          <a class='text-dark btn btn-outline-secondary btn-pill float-right' href='{{route('slider.index')}}'>← Back to List</a>
        </div>
     </form>

  
 
  </div>


  </div> {{-- end of card --}}
      
@endsection