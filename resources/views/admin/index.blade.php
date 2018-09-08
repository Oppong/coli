<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shards.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shards-dashboards.1.0.0.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/extras.1.0.0.min.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/ckeditor.js')}}"></script>

     <style>
.ck-editor__editable {
    min-height: 400px;
}
</style>


</head>
<body style="background-color: #fff;" >

<div class="container-fluid">
    <div class="row">

         <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1 rounded-circle mr-2" style="max-width: 25px;" src="/img/1.jpg" alt=""> 
                  <span class="d-none d-md-inline ml-1">Admin Panel</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="fa fa-wrench"></i>
              </a>
            </nav>
          </div>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              
              <li class="nav-item">
                <a class="nav-link active text-dark" href="{{route('admin.dashboard')}}">
                  <i class="fa fa-dashboard text-dark"></i>
                  <span>Dashboard</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-dark" href="{{route('users.index')}}">
                  <i class="fa fa-user text-dark"></i>
                  <span>User</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-dark" href="{{route('slider.index')}}">
                  <i class="fa fa-briefcase text-dark"></i>
                  <span>Image Slider</span>
                </a>
              </li>

            <li class="nav-item">
                <a class="nav-link text-dark dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-book text-dark"></i>
                  <span>Blog</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('cats.index')}}"><i class="fa fa-folder text-dark"></i> &nbsp; Category</a>
                    <a class="dropdown-item" href="{{route('blogs.index')}}"><i class="fa fa-file text-dark"></i> &nbsp; Create Post</a>
              </div>
              </li>

             {{--  <li class="nav-item dropdown">
                <a class="nav-link text-dark">
                  <i class="fa fa-binoculars text-dark"></i>
                  <span>Upcoming Events</span>
                </a>
              </li> --}}

               <li class="nav-item">
                <a class="nav-link text-dark" href="{{route('gallery.index')}}">
                  <i class="fa fa-image text-dark"></i>
                  <span>Gallery</span>
                </a>
              </li>

             <li class="nav-item">
                <a class="nav-link text-dark" href="{{route('settings.index')}}">
                  <i class="fa fa-gears text-dark"></i>
                  <span>Website Settings</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-dark border-left" href="{{ route('adminsettings.index')}}">
                  <i class="fa fa-cog text-dark"></i>
                  <span>Admin Settings</span>
                </a>
              </li>

               <li class="nav-item">
                <a class="nav-link text-dark border-left" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out text-danger"></i>
                  <span>Logout</span>
                </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
              </li>


            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->

           <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-search"></i>
                    </div>
                  </div>
                  <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
              </form>
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item border-right dropdown notifications">
                  <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="nav-link-icon__wrapper">
                      <i class="fa fa-bell"></i>
                      <span class="badge badge-pill badge-danger">0</span>
                    </div>
                  </a>
                </li>
                 @if(Auth::check())
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="/img/1.jpg" alt="">
                    <span class="d-none d-md-inline-block text-dark">{{ Auth::user()->name }}</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out text-danger"></i> Logout </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </div>         
                </li>
                @endif
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="fa fa-bars"></i>
                </a>
              </nav>
            </nav>
          </div>
          <!-- / .main-navbar -->


          {{-- MAIN CONTENT --}}
        
        <div class="mt-5 pl-4 pr-4"> 

            @yield('content')


          </div>

        
        {{-- END OF MAIN CONTENT --}}
            <p class="text-right text-muted mr-3"><small>Created by Amponsah. Version 1.0 </small></p>
          </div> 
        </main>
       
        </div> {{-- end of col --}}
    </div> {{-- end of row --}}
</div>{{-- end of contianer --}}

    
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/shards.min.js') }}" ></script>
    <script src="{{ asset('js/extras.1.0.0.min.js') }}" ></script> 
    <script src="{{ asset('js/shards-dashboards.1.0.0.min.js') }}" ></script>

     <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>
</html>


