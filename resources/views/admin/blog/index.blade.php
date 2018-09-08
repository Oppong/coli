@extends('admin.index')
@section('title', ' | Posts Page')


@section('content')

{{-- <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Add Post </button> --}}
<a class="btn btn-info" href="{{route('blogs.create')}}">Add Post </a>
  <h4 class="text-center">Manage Blog Post </h4>
  <br>
  <div class="card mb-5 p-3">
    <div class="card-header">
        <h6 class="m-0">All Blog Post</h6>
    </div>

<table class="table table-bordered">
	 <thead class="bg-light">
	 	<th> Title</th>
	 	<th> Body </th>
    <th> Image</th>
	 	<th> Category</th>
	 	<th> Action</th>
	 	<th> Action </th>
	 </thead>
		 <tbody>
		 @foreach( $blogs as $blog)
		   <tr>
		 	<td>{{ $blog->title}}</td>
		 	<td>{{substr($blog->body, 0, 100) }} ...</td>
		 	<td><img src="/img/{{ $blog->image}}" alt=""  width="150" height="60"></td>
      <td>{{ $blog->category->name}}</td>
		 	<td><a href="{{ route('blogs.edit', $blog->id)}}" class="btn btn-success">Edit</a></td>
		 	<td><form action="{{ route('blogs.destroy', $blog->id)}}" method="POST">
		 		  <input type="hidden" name="_method" value="DELETE">
		 		     {{ csrf_field()}}
		 		     <button class="btn btn-danger">Delete</button>
		 	</form></td>
		   </tr>
		 @endforeach
		 </tbody>
</table>
</div>


{{--  Modal for creating new alumni 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Post </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
     <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

      <h4 class="text-center">Create Post</h4>
      <hr>
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
      <textarea name="body" id="body" rows="15" class="form-control"></textarea>
    </div>
     <div class="form-group">
      <label for="image">Upload Image</label>
      <input type="file" name="image" id="image" class="form-control">
    </div>
    <div class="form-group">
      <button class="btn btn-info">Create a Post</button>
    </div>
  </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>>
      </div>
    </div>
  </div>
</div>
 --}}
<!-- end of modal for creating new a alumni -->
   {{ $blogs->links()}}

@endsection