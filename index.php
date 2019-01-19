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
			background:url(images/bg1.jpg);
			background-size: cover; 
		}
		.box{
			width: 300px;
			margin:0 auto;
			border-radius: 23px;
			background-color: rgb(255,255,255,0.3);
			padding: 20px 20px;
			text-align: center;
			font-family: sans-serif;
			top: 50%;
			transform: translateY(50%);
			color: white;	
		}
		#register{
			width: 100%;
			height: 30px;
			border-radius: 5px;
			border: 1px solid white;
			background-color: cadetblue;
			color: white;	
			cursor: pointer;
		}
		#login{
			margin-top: 30px;
			width: 100%;
			height: 30px;
			border-radius: 5px;
			border: 1px solid #fff;
			background-color: cadetblue;
			color: white;
			cursor: pointer;	
		}
		#logout{
			margin-top: 30px;
			width: 100%;
			height: 30px;
			border-radius: 5px;
			border: 1px solid #fff;
			background-color: cadetblue;
			color: white;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="box">
	
			<h1>Welcome</h1>
			<a href="register.php"><button id="register">Register</button></a>
			<a href="login.php"><button id="login">Login</button></a>
	<!-- 		<button id="logout">Log out</button> -->
	</div>
</body>

</html>