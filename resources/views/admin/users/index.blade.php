@extends('admin.index')
@section('title', ' | Users Page')



@section('content')

       <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Add User </button>
	<h4 class="text-center">Manage Users </h4>
	<br>
  <div class="card mb-5 p-3">
    <div class="card-header">
        <h6 class="m-0">Active Users</h6>
    </div>
	<table class="table  table-bordered">
		<thead class="bg-light">
			<th>id</th>
			<th>Name</th>
      <th>Email </th>
      <th>Date Created </th>
      <th>Action</th>
			<th>Action</th>
		</thead>
		<tbody>
		@foreach($users as $user)
      <tr>
				<td>{{ $user->id}}</td>
				<td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->created_at->toFormattedDateString()}}</td>
				<td><a href="{{ route('users.edit', $user->id )}}" class="btn btn-success">Edit</a></td>
				<td><form action="{{ route('users.destroy', $user->id)}}" method="POST">
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
        <h5 class="modal-title" id="exampleModalLabel">Add User </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form action="{{route('users.store')}}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name"> Name</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email"> Email  </label>
          <input type="text" name="email" id="email" class="form-control">
        </div>
         <div class="form-group">
          <label for="password"> Password  </label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
          <label for="password_confirmation"> Confirm Password  </label>
          <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Add User </button>
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


{{ $users->links()}}
@endsection