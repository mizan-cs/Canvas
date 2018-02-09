<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="https://getbootstrap.com/favicon.ico">

	<title>Canvas</title>

	<link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://getbootstrap.com/docs/4.0/examples/album/album.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
	<link href="css/blog.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootsrap.min.css">
	<link rel="stylesheet" href="css/form.css">


	<style rel="stylesheet">
	.img-circle {
		border-radius: 50%;
	}
	.img-circle {
		border-radius: 0;
	}

	.ratio {
		background-position: center center;
		background-repeat: no-repeat;
		background-size: cover;

		height: 0;
		padding-bottom: 100%;
		position: relative;
		width: 10px;
	}
	.img-circle {
		border-radius: 50%;
	}
	.img-responsive {
		display: block;
		height: 30px;
		width: 30px;
	}
	</style>

</head>
<body style="background:#fafafa;">

	<header>
		@include('layout.header')

		@include('layout.nav')
	</header>

	<main role="main">

		@yield('content')

	</main>

	@include('layout.footer')

	@include('layout.js')

</body>
</html>
