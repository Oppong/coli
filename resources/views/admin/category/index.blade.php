@extends('admin.index')
@section('title', ' | Categories Page')



@section('content')

  <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Add Category </button>
  <h4 class="text-center">Manage Categories </h4>
  <br>
  <div class="card mb-5 p-3">
    <div class="card-header">
        <h6 class="m-0">All Categories</h6>
    </div>
	<table class="table table-bordered">
		<thead class="bg-light">
			<th>Name</th>
			<th>Action</th>
			<th>Action</th>
		</thead>
		<tbody>
		@foreach($category as $category)
				<td>{{ $category->name }}</td>
				<td><a href="{{ route('cats.edit', $category->id )}}" class="btn btn-success">Edit</a></td>
				<td><form action="{{ route('cats.destroy', $category->id)}}" method="POST">
					 <input type="hidden" name="_method" value="DELETE">
					    {{csrf_field()}}

					    <button class="btn btn-danger">Delete</button>
				</form></td>
			</tr>
		@endforeach
		</tbody>
	</table>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form action="{{route('cats.store')}}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name"> Name </label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Add a Category </button>
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


@endsection