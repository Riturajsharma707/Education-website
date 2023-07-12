<!DOCTYPE html>
<html>

<head>
	<title>Login 11th Notes</title>
	<!-- <link rel="stylesheet" type="text/css" href="../Css/TestPageStyle.css"> -->
	<style>
		*{
			padding: 0;
			margin: 0;
		}
		body{
			width: 70%;
			margin: 0 auto;
			background-color:rgba(28, 37, 92, 0.637);
		}
		.header {
			justify-content: center;
			display: flex;
		}
		.container{
			padding: 180px;
			display: flex;
			justify-content: center;
			align-items: center;

		}
		h2{
			margin-top: 100px;
		}
		.left-side{
			background-color: rgb(201, 201, 253);
			width:400px;
			height: 400px;
			text-align: center;
			border-left: 2px solid gray;
			border-top: 2px solid gray;
			border-bottom: 2px solid gray;
			border-top-left-radius: 10px;
			border-bottom-left-radius: 10px;
			float: left;
		}
		.right-side{
			float: left;
			background-color: rgb(201, 201, 253);
			width:400px;
			height: 400px;
			justify-content: center;
			text-align: center;
			border-right: 2px solid gray;
			border-top: 2px solid gray;
			border-bottom: 2px solid gray;
			border-top-right-radius:10px;
			border-bottom-right-radius: 10px;
		}
		.left-side button{
			width: 180px;
			height: 50px;
			border:2px solid gray;
			border-radius: 10px;
			background-color: lightgreen;
			margin: 70px 15px 25px ;
			font-size: 14px;

		}
		.right-side button{
			width: 180px;
			height: 50px;
			border:2px solid gray;
			border-radius: 10px;
			background-color: lightgreen;
			margin: 42px 15px 25px ;
			font-size: 14px;
		}
		button:hover {
			background-color: green;
			color: white;
		}
		button:hover a{
			background-color: green;
			color: white;
		}
		button a{
			text-decoration: none;
			font-size: 30px;
			font-style:italic;
		}
	</style>
</head>

<body>
	<class class="container">
		<div class="left-side">
			<h2>Login for Download Notes....</h2>
			<!-- <p><strong>Total question $total no</strong></p>
			<p><strong>Total time for question $total no</strong></p>
			<p><strong>Best of luck my dear future Star</strong></p> -->
			<button><a href="StudentLogin.php"><strong>Login</strong></a> for student</button>
		</div>
		<div class="right-side">
			<h2>Login Only Admin</h2>
			<p>Upload Notes</p>
			<button><a href="AdminLogin.php"><strong>Login</strong></a> only admin</button>
		</div>
		</div>
</body>

</html>