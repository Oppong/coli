@extends('layouts.app')

@section('content')

   <div class="container">
        <div class="row mt-5">
            <div class=" col-md-4 offset-md-4">
              <div class="card p-4">
               <form action="{{  route('admin.store') }}" method="POST">
                   {{ csrf_field()}}

                <h5 class="text-center card-header" style="background-color: white"> Admin Login </h5>

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

                        {{-- remember --}}

                     <div class="form-group">
                        <div class="form-check">
                             <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                              <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                              </label>
                        </div> 
                    </div>{{-- end of form group --}}


                    {{-- Login and forgot your password --}}

                     <div class="form-group">
                        <button class="btn btn-success btn-sm">Login</button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                     </div>{{-- end of form group --}}

               </form>   
             </div><!-- end of card -->
            </div>{{-- end of col -md -4 --}}
        </div>{{-- end of row --}}
    </div> 


@endsection
