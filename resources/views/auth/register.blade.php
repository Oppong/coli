@extends('layouts.app')

@section('content')

   <div class="container">
        <div class="row mt-5">
            <div class=" col-md-4 offset-md-4">
              <div class="card p-4">
               <form action="{{ route('register') }}" method="POST">
                   {{ csrf_field()}}

                   {{-- name --}}
                <h5 class="text-center card-header" style="background-color: white">Register</h5>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required="autofocus"> 
                    </div>{{-- end of form group --}}

                    {{-- email --}}

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required="autofocus">   
                    </div>{{-- end of form group --}}

                    {{-- password --}}

                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required="autofocus">  
                    </div>{{-- end of form group --}}


                    {{-- confirm password --}}

                     <div class="form-group">
                        <label for="confirm-password"> Confirm Password</label>  
                        <input type="password" class="form-control" name="password_confirmation" id="confirm-password" required="autofocus">  
                    </div>{{-- end of form group --}}


                    {{-- Register --}}

                     <div class="form-group">
                        <button class="btn btn-success btn-sm">Register</button>
                     </div>{{-- end of form group --}}
               </form>   
             </div><!-- end of card -->
            </div>{{-- end of col -md -4 --}}
        </div>{{-- end of row --}}
    </div> 


@endsection
