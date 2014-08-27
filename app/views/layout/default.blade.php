<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ isset($title) ? $title." - Teste" : 'Teste' }}</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
	@include('layout.navbar')

	@yield('content')

	@include('layout.footer')

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
</body>
</html>
