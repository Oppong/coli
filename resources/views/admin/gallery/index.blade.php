@extends('admin.index')
@section('title', ' | Gallery')



@section('content')


  <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Add Image</button>
  <h4 class="text-center">Manage Gallery </h4>
  <br>
  <div class="card mb-5 p-3">
    <div class="card-header">
        <h6 class="m-0">All Images</h6>
    </div>
	<table class="table table-bordered table-responsive">
		<thead class="bg-light">
			<th>Image</th>
      <th>Title </th>
			<th>Description </th>
			<th>Action</th>
			<th>Action</th>
		</thead>
		<tbody>
		@foreach($galleries as $gallery)
				<td><img src="/img/{{ $gallery->image}}" alt="" width="150" height="60"> </td>
        <td>{{ $gallery->title}}</td>
				<td>{{ $gallery->para}}</td>
				<td><a href="{{ route('gallery.edit', $gallery->id )}}" class="btn btn-success">Edit</a></td>
				<td><form action="{{ route('gallery.destroy', $gallery->id)}}" method="POST">
					 <input type="hidden" name="_method" value="DELETE">
					    {{csrf_field()}}

					    <button class="btn btn-danger">Delete</button>
				</form></td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>


<!-- Modal for creating new alumni -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Image </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form action="{{route('gallery.store')}}" method="POST"  enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="title"> Title</label>
          <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
          <label for="para"> Description  </label>
          <input type="text" name="para" id="para" class="form-control">
        </div>
        <div class="form-group">
         <label for="image">Upload Image</label>
         <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Add Image </button>
        </div>
     </form>
    
     <br>

        @include('partials.errors')
   


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

{{ $galleries->links()}}

@endsection