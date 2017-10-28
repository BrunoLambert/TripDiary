<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		#divTitulo{
			background-color: lightblue;
			margin-bottom: auto;
		}

		#titulo{
			font-family: "Comic Sans MS";
		}
	</style>

</head>
<body>
	<div class="jumbotron text-center" id="divTitulo">
		<h1 id="titulo"><img src="https://maxcdn.icons8.com/Share/icon/Transport//airplane_takeoff1600.png" width="200px">
		Trip Diary</h1>
	</div>

	@yield('content')

	<div class="jumbotron text-center" id="divTitulo">	
		<p>
			Trip Diary
			<br>Phone: (XX) XXXX-XXXX
			<br>Email: tripdiary@tripdiary.com
		</p>
	</div>
</body>
</html>