<html>
<head>
	{{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>PERFORM auto | @yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="/images/logo.png">
  {{-- fonts --}}
  <link rel="stylesheet" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('fonts/themify-icons/themify-icons.css')}}">
  {{-- main styles --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  {{-- header styles --}}
  @if (request()->is('/'))
    <link rel="stylesheet" href="{{ asset('css/header-transparent.css') }}">
	@endif
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js')}}"></script>
</head>
<body>

	@include('client.common.header')
    
	@show

  @yield('content')
    
	@include('client.common.footer')

</body>
</html>
