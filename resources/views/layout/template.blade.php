<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('judul')</title>
<meta name="description" content="">
<meta name="author" content="">
	
	


<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{asset('template/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('template/fonts/font-awesome/css/font/font-awesome.css')}}">

<!-- Slider
    ================================================== -->
<link href="{{asset('template/css/owl.carousel.css')}}" rel="stylesheet" media="screen">
<link href="{{asset('template/css/owl.theme.css')}}" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="{{asset('template/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('template/css/nivo-lightbox/nivo-lightbox.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('template/css/nivo-lightbox/default.css')}}">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">
	
	
</head>
<body>

	@include('layout.navbar')
	@yield('isi')
	


</body>
</html>