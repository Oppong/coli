@extends('admin.index')
@section('title', ' | Posts Page')


@section('content')
  
  

  	<h4 class="text-center">Administrator Settings </h4>
  <br>

 <div class="row"> 
  <div class="card mb-5 p-3 col-md-4 mr-3">
    <div class="card-header">
        <h6 class="m-0"> Admin Settings</h6>
    </div>

      <form action="{{route('adminsettings.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="text"> Motivating Text</label>
          <input type="text" name="text" id="text" class="form-control">
        </div>
        <div class="form-group">
         <label for="image">Upload Image</label>
         <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Add Settings</button>
        </div>
     </form>


 </div>{{-- end of card --}}


 <div class="card mb-5 p-3 col-md-4">
    <div class="card-header">
        <h6 class="m-0"> View Settings</h6>
    </div>

		<h6> Motivating Text</h6>
	@foreach($adminsettings as $settings)
		<p><small>{{ $settings->text}}</small></p>

		<img src="/img/{{ $settings->image}}" alt="" class="rounded-circle" width="100" height="100"></img>
	@endforeach
	<h6 > Admin Profile Image</h6>

  </div>{{-- end of card --}}


</div>{{-- end of row --}}

@endsection