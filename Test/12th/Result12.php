<?php 

session_start();

?>

<html>
<head>
	<title>Result</title>
	<style>
		body{
            background-color: rgb(204, 228, 238);
        }
        .container{
            background-color: rgba(22, 51, 63, 0.555);
            width: 50%;
            margin:15% 25% 25% 25%;
            align-items: center;
            border: 2px solid gray;
            border-radius: 9px;
            padding: 16px;
            box-shadow:rgb(58, 145, 0) 8px 9px 53px;
            
        }
        .current{
            font-size: 1.5rem;
		}
        
		.btn{
            background-color: orange;
            width: 100px;
            height: 25px;
            border: 1px solid black;
            border-radius: 9px;
            font-size: large;
            font-style: italic;
			text-align: center;
			padding: 5px;
            /* margin: 10px 25px 25px 25%; */
        }
		.btn a{
			text-decoration: none;
			color: black;
		}
		.btn a:hover{
			color: white;
		}
        .btn:hover {
            background-color: rgb(153, 51, 15);
            box-shadow: 5px 1.5px;  
			color: aliceblue;          
        }
	</style>
</head>
<body>
	<main>
			<div class="container">
				<h2>Your Result</h2>
				<div class="current">
					<p>Congratulation You have completed this test succesfully.</p>
					<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
					<?php unset($_SESSION['score']); ?>
				</div>
				
				<div class="btn">
					<a href="LoginForTest12.html"><strong>Main Page</strong></a>
				</div>
			</div>

	</main>








</body>
</html>