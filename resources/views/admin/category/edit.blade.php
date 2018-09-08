@extends('admin.index')


@section('content')
 
 <div class="card p-3">
   <div class="card-header bg-light">
     <h4 class="m-0 text-center">Edit Category</h4>
   </div>
  <div class="col-md-8 offset-md-2">
       <form action="{{ route('cats.update',  $category->id )}}" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="_method" value="PATCH">

         {{ csrf_field() }}

        <div class="form-group">
          <label for="name"> Name </label>
          <input type="text" name="name" id="name" class="form-control" value="{{ $category->name}}">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update Category </button>
          <a class='text-dark btn btn-outline-secondary btn-pill float-right' href='{{route('cats.index')}}'>← Back to List</a>
        </div>
     </form>

  </div>

   </div> {{-- end of card --}}
      
@endsection