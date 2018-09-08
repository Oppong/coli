@extends('admin.index')


@section('content')

<div class="card p-3">
   <div class="card-header">
     <h4 class="m-0 text-center">Create Post</h4>
   </div>


	<form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control">
          @foreach($categories as $category)
            <option value="{{ $category->id }}">{{$category->name}}</option>
          @endforeach     
        </select>
      </div>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" id="editor" rows="15" class="form-control"></textarea>
    </div>
     <div class="form-group">
      <label for="image">Upload Image</label>
      <input type="file" name="image" id="image" class="form-control">
    </div>
    <div class="form-group">
      <button class="btn btn-info">Create a Post</button>
      <a class='text-dark btn btn-outline-secondary btn-pill float-right' href='{{route('blogs.index')}}'>← Back to List</a>
    </div>
  </form>

	   </div> {{-- end of card --}}
@endsection