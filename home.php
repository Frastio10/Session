<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport">
	<meta content="width=device-width, initial-scale=1.0">	
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body{
			background: url(images/bg2.jpg);
			background-size: cover;
		}
		.box{
			width: 300px;
			height: 150px;
			margin:0 auto;
			border-radius: 23px;
			background-color: rgba(0,0,0,0.1);
			padding: 1px 20px;
			text-align: center;
			font-family: sans-serif;
			top: 50%;
			transform: translateY(50%);
		}
		#logout{
			width: 100%;
			height: 30px;
			border-radius: 5px;
			border: 1px solid #fff;
			background-color: cadetblue;
			color: white;	
		}
	</style>
</head>
<body>
	<div class="box">
		<form>
			<h1>Login Success</h1>
			<button id="logout" type="submit">Log out</button>
		</form>
	</div>
</body>
</html>