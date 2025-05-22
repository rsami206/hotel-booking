<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>UrbanNest Hotel Booking</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    {{-- bootstrap icons --}}
    
    {{-- my links  --}}
     <link rel="stylesheet" href=" {{asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href=" {{asset('vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href=" {{asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href=" {{asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href=" {{asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
     
</head>
<body>  
   

    @include('partials.navbar')
    @if(request()->routeIs('index'))
    @include('partials.hero')
    @endif
    @yield('content')
     @if(request()->routeIs('index'))
       @include('partials.about')
    @endif

    @include('partials.footer')
=======

<head>
    <meta charset="UTF-8">

    <title>UrbanNest Hotel Booking</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=" {{asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href=" {{asset('vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href=" {{asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href=" {{asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href=" {{asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/responsive.css') }}">

    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')
    @if(request()->routeIs('index'))
    @include('partials.hero')
    @endif
    @yield('content')
    @include('partials.About')
    @include('partials.blog')
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>
<<<<<<< HEAD
   
</body>
</html>
=======
</body>

</html>
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
