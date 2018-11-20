<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/uniform.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/select2.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/matrix-media.css')}}" />
    {{--<link rel="stylesheet" href="{{ asset('css/custom.css')}}" />--}}
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css />
    <link href="{{ asset('fonts/backend_fonts/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/jquery.gritter.css')}}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>


</head>
<body>

@include('layouts.adminLayout.admin_header')

@include('layouts.adminLayout.admin_sidebar')


@yield('content')

@include('layouts.adminLayout.admin_footer')


<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/jquery.ui.custom.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.uniform.js')}}"></script>
<script src="{{ asset('js/select2.min.js')}}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('js/jquery.validate.js')}}"></script>
<script src="{{ asset('js/matrix.js')}}"></script>
<script src="{{ asset('js/matrix.form_validation.js')}}"></script>
<script src="{{ asset('js/matrix.tables.js')}}"></script>
<script src="{{ asset('js/matrix.popover.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>



</body>
</html>
