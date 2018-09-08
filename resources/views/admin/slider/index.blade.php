@extends('admin.index')
@section('title', ' | All Sliders')


@section('content')
 <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Add Slider </button>
 <br>
 <br>
 <p class="bg-light p-3"> please insert this code in your banner slider. <code> $sliders as $key => $slider</code> then <code>$key == 0 ? 'active' : ''</code> in your bootstrap carousel then for the carousel indicators >please insert this code in your carousel indicators <code>data-slide-to $loop->index</code> followed by <code>class $loop->first ? 'active' : '' </code></p>
  <h4 class="text-center">Manage Sliders </h4>
  <br>
  <div class="card mb-5 p-3">
    <div class="card-header">
        <h6 class="m-0">Active Sliders </h6>
    </div>
	<table class="table table-bordered">
		<thead class="bg-light">
			<th>Image</th>
			<th>Title</th>
			<th>Paragraph</th>
			<th>Action</th>
			<th>Action</th>
		</thead>
		<tbody>
		@foreach($sliders as $slider)
			<tr>
				<td><img src="/img/{{ $slider->image}}" alt="" width="150" height="60"></td>
				<td>{{ $slider->title}}</td>
				<td>{{ $slider->body}}</td>
				<td><a href="{{ route('slider.edit', $slider->id )}}" class="btn btn-success">Edit</a></td>
				<td><form action="{{ route('slider.destroy', $slider->id)}}" method="POST">
					 <input type="hidden" name="_method" value="DELETE">
					    {{csrf_field()}}

					    <button class="btn btn-danger">Delete</button>
				</form></td>
			</tr>
		@endforeach
		</tbody>
	</table>
  </div>


<!-- Modal for creating new slider -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add a Slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="title"> Title</label>
          <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
          <label for="body"> Paragraph  </label>
          <input type="text" name="body" id="body" class="form-control">
        </div>
        <div class="form-group">
         <label for="image">Upload Image</label>
         <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Create Slider</button>
        </div>
     </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<!-- end of modal for creating new slider -->


@endsection