@extends('admin.index')
@section('title', ' | Settings')


@section('content')
  
 
 <div class="row"> 
  <div class="card mb-5 p-3 col-md-12 mr-3">
    <div class="card-header">
        <h6 class="m-0">Web Settings</h6>
    </div>

	<form action="{{route('settings.store')}}" method="POST">
		{{ csrf_field()}}

		  <div class="form-group row">
		    <label for="meta_descr" class="col-sm-2 col-form-label">Meta Description</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="meta_descr" name="meta_description">
		    </div>
		  </div>

			<br>

		  <div class="form-group row">
		    <label for="meta_keyword" class="col-sm-2 col-form-label">Meta Keyword</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="meta_keyword"  name="meta_keyword">
		    </div>
		  </div>

			<br>

		   <div class="form-group row">
		    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="phone" name="phone">
		    </div>
		  </div>

			<br>

		 <div class="form-group row">
		    <label for="email" class="col-sm-2 col-form-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="email" name="email" >
		    </div>
		  </div>

		<br>

		 <div class="form-group row">
		    <label for="address" class="col-sm-2 col-form-label"> Address </label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="address" name="address" >
		    </div>
		  </div>

		<br>

		<h5 class="text-center font-weight-bold"> Urls for Social Media Handles</h5>
		<br>

		 <div class="form-group row">
		    <label for="twitter" class="col-sm-2 col-form-label"> Twiiter </label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="twitter" name="twitter" >
		    </div>
		  </div>

		<br>

		 <div class="form-group row">
		    <label for="facebook" class="col-sm-2 col-form-label"> Facebook </label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="facebook" name="facebook" >
		    </div>
		  </div>

		<br>

		 <div class="form-group row">
		    <label for="instagram" class="col-sm-2 col-form-label"> Instagram </label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="instagram" name="instagram" >
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="youtube" class="col-sm-2 col-form-label"> Youtube </label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="youtube" name="youtube" >
		    </div>
		  </div>

		   <div class="form-group row">
		    <label for="linkedin" class="col-sm-2 col-form-label"> LinkedIn </label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="linkedin" name="linkedin" >
		    </div>
		  </div>

		<br>

		 <div class="form-group">
          <button type="submit" class="btn btn-info" >Add Settings</button>
          <a class="btn btn-success" href="" data-toggle="modal" data-target="#exampleModal">View Settings</a>
        </div>
		
   </form>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Web Settings </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
    
  <form>
		{{ csrf_field()}}

	   @foreach($settings as $setting)
		  <div class="form-group row">
		    <label for="meta_descr" class="col-sm-2 col-form-label">Meta Description</label>
		    <div class="col-sm-10">
		      <input type="text" readonly class="form-control" id="meta_descr" value="{{ $setting->meta_description }}" name="meta_description">
		    </div>
		  </div>

			<br>

		  <div class="form-group row">
		    <label for="meta_keyword" class="col-sm-2 col-form-label">Meta Keyword</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="meta_keyword" value="{{ $setting->meta_keyword}}" name="meta_keyword">
		    </div>
		  </div>

			<br>

		   <div class="form-group row">
		    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="phone" name="phone" value="{{ $setting->phone}}">
		    </div>
		  </div>

			<br>

		 <div class="form-group row">
		    <label for="email" class="col-sm-2 col-form-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="email" name="email" value="{{ $setting->email}}">
		    </div>
		  </div>

		<br>

		 <div class="form-group row">
		    <label for="address" class="col-sm-2 col-form-label"> Address </label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="address" name="address" value="{{ $setting->address}}">
		    </div>
		  </div>

		<br>

		<h5 class="text-center font-weight-bold"> Urls for Social Media Handles</h5>
		<br>

		 <div class="form-group row">
		    <label for="twitter" class="col-sm-2 col-form-label"> Twiiter </label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="twitter" name="twitter" value="{{ $setting->twitter}}">
		    </div>
		  </div>

		<br>

		 <div class="form-group row">
		    <label for="facebook" class="col-sm-2 col-form-label"> Facebook </label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $setting->facebook}}">
		    </div>
		  </div>

		<br>

		 <div class="form-group row">
		    <label for="instagram" class="col-sm-2 col-form-label"> Instagram </label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $setting->instagram}}">
		    </div>
		  </div>

		  <div class="form-group row">
		    <label for="youtube" class="col-sm-2 col-form-label"> Youtube </label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="youtube" name="youtube" value="{{ $setting->youtube}}">
		    </div>
		  </div>

		<br>


	    @endforeach
   </form>
   


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>



  </div>{{-- end of card --}}


</div>{{-- end of row --}}

@endsection
