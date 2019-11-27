<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">

	<title>Hello, world!</title>
</head>
<body>
	@include('partial.navbar')
	<!-- header-area-end -->
	@yield('content')

	@include('partial.footer')
</body>
</html>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('dist/js/slim.min.js')}}"></script>
<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>