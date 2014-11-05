<!-- Stored in app/views/layouts/master.blade.php -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title?></title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}
        p{ text-align: left;}
		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
		tr th {width: 20%}
	</style>
</head>
<body>
 @section('sidebar')
            This is the master sidebar.
        @show
	<div class="container">
	 @yield('content')
	</div>
</body>
</html>
