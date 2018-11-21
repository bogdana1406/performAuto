<html>
<head>
	{{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>PERFORM auto | @yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="/img/logo.png">
  {{-- fonts --}}
  <link rel="stylesheet" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('fonts/themify-icons/themify-icons.css')}}">
  {{-- main styles --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  {{-- header styles --}}
  @if (request()->is('/'))
    <link rel="stylesheet" href="{{ asset('css/header-transparent.css') }}">
	@endif

</head>
<body>

	@include('client.common.header')
    
	@show

  @yield('content')
    
	@include('client.common.footer')

	{{-- js for bootstrap --}}
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
