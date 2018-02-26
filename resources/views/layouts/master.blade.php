

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content=
    "width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"
    name="viewport" />
    <link rel="icon" type="image/png" href="src/images/ggg.png">
    <meta name="news_keywords" content="appareillage electrique, fabrication appareillage" />
    <meta name="keywords" content="Somacogir" />
    <meta name="description" content="La société SOMACOGIR, est spécialisée dans la distribution de matériels et
     outillage BTP ainsi que l’équipement industriel" />

    <title>@yield('title')</title>




    <link type="text/css" rel="stylesheet" href="src/css/css-reset.css">
	<link type="text/css" rel="stylesheet" href="src/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="src/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="src/css/animate.css">
    <link type="text/css" rel="stylesheet" href="src/css/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="src/css/owl.theme.default.min.css">
	<link type="text/css" rel="stylesheet" href="src/css/main.css">
	<link type="text/css" rel="stylesheet" href="src/assets/css/responsive.css">




</head>
<body>
    @include('partials.header')


       <div class="container">
          @yield('content')
       </div>
       @yield('outcontainer')
       @yield('extra')
   <!-- @include('partials.clients')

    @include('partials.up-footer')-->

    @include('partials.footer1')



 <script src="src/js/jquery-2.2.3.min.js"></script>
<script src="src/js/bootstrap.min.js"></script>
<script src="src/js/jquery.counterup.min.js"></script>
<script src="src/js/owl.carousel.min.js"></script>
<script src="src/js/waypoints.min.js"></script>
<script src="src/js/wow.min.js"></script>
<script src="src/js/ajax.js"></script>
<script src="src/js/main.js"></script>
</body>
</html>
