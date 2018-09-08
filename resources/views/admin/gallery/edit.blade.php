@extends('admin.index')


@section('content')
 
 <div class="card p-3">
   <div class="card-header bg-light">
     <h4 class="m-0 text-center">Edit An Image</h4>
   </div>
  <div class="col-md-8 offset-md-2">
       <form action="{{ route('gallery.update',  $gallery->id )}}" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="_method" value="PATCH">

         {{ csrf_field() }}

        <div class="form-group">
          <label for="title"> Title</label>
          <input type="text" name="title" id="title" class="form-control" value="{{ $gallery->title}}">
        </div>
        <div class="form-group">
          <label for="para"> Description  </label>
          <input type="text" name="para" id="para" class="form-control" value="{{ $gallery->para}}">
        </div>
        <div class="form-group">
         <label for="image">Upload Image</label>
         <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update Image</button>
        </div>
     </form>

  </div>
  </div>{{-- end of card --}}
      
@endsection