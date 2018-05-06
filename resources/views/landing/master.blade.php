<!doctype html>
<html lang="en">
<head>
    <title>@yield('header') </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Applify - App Landing Page</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600" rel="stylesheet">
    <link rel="stylesheet" href="/website/assets/css/applify.min.css"/>
</head>

<body>
@include('landing.topnav')

<div>
    @yield('content')
</div>

@include('landing.footer')
<script src="website/assets/js/libs/jquery/jquery-3.2.1.min.js"></script>
<script src="website/assets/js/libs/slider-pro/jquery.sliderPro.min.js"></script>
<script src="website/assets/js/libs/owl.carousel/owl.carousel.min.js"></script>
<!--
# Google Maps
# Add Your Google Maps API Key Below !!
-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5B2iXEELo6aIReGYLJdVKBlzHnrM0YLU"></script>
<script src="website/assets/js/applify/ui-map.js"></script>
<script src="website/assets/js/libs/form-validator/form-validator.min.js"></script>
<script src="website/assets/js/libs/bootstrap.js"></script>
<script src="website/assets/js/applify/build/applify.js"></script>
</body>
</html>