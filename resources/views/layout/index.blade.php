<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop | Fahsion</title>
<link href="Front/img/logo/logo.png" rel="icon">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
<link rel="stylesheet" href="{{ URL::asset('Front/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('Front/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('Front/css/elegant-icons.css') }}">
<link rel="stylesheet" href="{{ URL::asset('Front/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ URL::asset('Front/css/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('Front/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('Front/css/slicknav.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('Front/css/style.css') }}">

<base href="{{asset('')}}">



</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    {{-- @include('layout.navbar') --}}

    <!-- Humberger End -->

    <!-- Header Section Begin -->
    @include('layout.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @include('layout.categories')
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->

    <!-- Categories Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
    @include('layout.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->

  <script src="{{ URL::asset('Front/js/jquery-3.3.1.min.js') }}"></script>

  <script src="{{ URL::asset('Front/js/bootstrap.min.js') }}"></script>

  <script src="{{ URL::asset('Front/js/jquery.nice-select.min.js') }}"></script>

  <script src="{{ URL::asset('Front/js/jquery-ui.min.js') }}"></script>

  <script src="{{ URL::asset('Front/js/jquery.slicknav.js') }}"></script>

  <script src="{{ URL::asset('Front/js/mixitup.min.js') }}"></script>

  <script src="{{ URL::asset('Front/js/owl.carousel.min.js') }}"></script>

  <script src="{{ URL::asset('Front/js/main.js') }}"></script>


</body>

</html>