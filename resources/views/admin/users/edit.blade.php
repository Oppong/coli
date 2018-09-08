@extends('admin.index')


@section('content')

<div class="card">
   <div class="card-header bg-light">
     <h4 class="m-0 text-center">Edit a User</h4>
   </div>

  <div class="col-md-8 offset-md-2">
       <form action="{{ route('users.update',  $user->id )}}" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="_method" value="PATCH">

         {{ csrf_field() }}

          <div class="form-group">
          <label for="name"> Name</label>
          <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="form-group">
          <label for="email"> Email  </label>
          <input type="text" name="email" id="email" class="form-control" value="{{ $user->email}}">
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
          <button type="submit" class="btn btn-info">Update User </button>
          <a class='text-dark btn btn-outline-secondary btn-pill float-right' href='{{route('users.index')}}'>← Back to List</a>
        </div>
     </form>

  </div>

</div> {{-- end of card --}}

      
@endsection