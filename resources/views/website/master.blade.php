<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Job Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('website/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{url('website/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('website/style.css')}}">
    <link rel="stylesheet" href="{{url('website/owl.css')}}">

  </head>

  <body>

    
    @include('website.partials.header')

    @yield('contents')

    
    @include('website.partials.footer')


    <!-- Bootstrap core JavaScript -->
    <script src="{{url('website/js/jquery.min.js')}}"></script>
    <script src="{{url('website/js/bootstrap.bundle.min.js')}}"></script>


    <!-- Additional Scripts -->
    <script src="{{url('website/js/custom.js')}}"></script>
    <script src="{{url('website/js/owl.js')}}"></script>
  </body>
</html>