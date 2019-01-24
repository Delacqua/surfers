<!doctype html>
<html lang="en">
<head>

		<meta name="csrf-token" content="{{ csrf_token() }}">

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<meta name="keywords" content=" " />
		<meta name="author" content="Fabricio Delacqua" />
		<meta name="description" content=" " />

		<!-- CSS -->
		<link rel="stylesheet" href="/css/app.css">

		<!-- JS -->
		<script src="/js/app.js"></script>

		<!-- Angular -->
		<script src="/js/angular.min.js"></script>
		<script src="/js/surfersApp.js"></script>

		<!-- Icons  -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

		<!-- Favicon -->
    	<!--link rel="icon" href="img/favicon.png" type="image/png" /-->

    	<title>Surfers Co.</title>

</head>
<body ng-app="surfersApp" >

    @include('header')

	@yield('content')

	@include('about')

	@include('social') 

	@include('footer') 

</body>
</html>