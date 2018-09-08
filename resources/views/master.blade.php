<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shards.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/et-line@1.0.1/style.min.css">
</head>
<body>
	<div id="app">

		<main class="py-4">
            @yield('content')
        </main>
	
         
           <div>
             @yield('main')
           </div>

           <div>
            @yield('another')
        </div>


         <div>
            @yield('footer')
        </div>

	
	</div>{{-- end of app--}}
	<script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/shards.min.js') }}" defer></script>
</body>
</html>