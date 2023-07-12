<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- link for font style -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
    	<link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="./AboutStyle.css"> -->
    <title>About</title>
    <style type="text/css">
		body{
			margin:0px;
			padding: 0px;
			/*background-color:black;*/
			/*background:url("./Image/back1.jpg");*/
			background-image: url("../Image/back1.jpg");
			background-repeat:no-repeat; 
			background-size: cover;
			/*background-position: center;*/
		}
		.container{
			padding: 15px;
			height: 70%;
			width: 40%;
			background-color: rgba(0,0,0,.6);
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);
			z-index: -1;

		}
		.img {
			height: 150px;
			width: 150px;
			background: url("../Image/Director_pic.jpg")no-repeat;
			background-size: cover;
			background-position: center;
			border-radius: 70px;
			position: absolute;
			top: 0%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		center h2{
			margin-top: 70px;
			color: lightblue;
			/* background-color: black; */
		}
		center p {
			color: white;
			background-color: black;
			border-radius: 15px;
		}
		.btn{
			background-color: lightgreen;
			left: 20%
			position: absolute;
			top: 90%;	
			border-radius5px;
			border:2px solid black;
		}
		.btn:hover{
			background-color: green;
			color: black;
		}
		@media (min-width: 1281px) {
		}
		@media (min-width: 1024px) and (max-width: 1366px) {
			body{
				margin:0px;
				padding: 0px;
				background:url("../Image/back1.jpg");
				background-repeat:no-repeat; 
				/*background-size: cover;*/
				/*background-position: center;*/
			}
			.container{
				padding: 15px;
				height: 65%;
				width: 55%;
				background-color: rgba(0,0,0,.6);
				position: absolute;
				top: 45%;
				left: 50%;
				transform: translate(-50%,-50%);
			z-index: -1;

			}
		}
		/* 
		  Device = Laptops, Desktops
		  Screen = B/w 1025px to 1280px
		*/
		@media (min-width: 1025px) and (max-width: 1280px) {
			body{
				margin:0px;
				padding: 0px;
				background:url("../Image/back1.jpg");
				background-repeat:no-repeat; 
				/*background-size: cover;*/
				/*background-position: center;*/
			}
			.container{
				padding: 15px;
				height: 70%;
				width: 55%;
				background-color: rgba(0,0,0,.6);
				position: absolute;
				top: 55%;
				left: 50%;
				transform: translate(-50%,-50%);
			z-index: -1;

			}
		}
		/* 
		  Device = Tablets, Ipads (portrait)
		  Screen = B/w 768px to 1024px
		*/
		@media (min-width: 768px) and (max-width: 1024px) {
			body{
				margin:0px;
				padding: 0px;
				background:url("../Image/back1.jpg");
				background-repeat:no-repeat; 
				/*background-size: cover;*/
				/*background-position: center;*/
			}
			.container{
				padding: 15px;
				height: 70%;
				width: 55%;
				background-color: rgba(0,0,0,.6);
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%,-50%);
			z-index: -1;

			}
		}
		/* 
		  Device = Low Resolution Tablets, Mobiles (Landscape)
		  Screen = B/w 481px to 767px
		*/
		@media (min-width: 481px) and (max-width: 767px) {
			body {
				margin:0px;
				padding: 0px;
				background:url("../Image/back1.jpg");
				background-repeat:no-repeat; 
			}
			.container{
				padding: 15px;
				height: 80%;
				width: 100%;
				background-color: rgba(0,0,0,.6);
				position: absolute;
				top: 80%;
				left: 50%;
				transform: translate(-50%,-50%);
			z-index: -1;

			}
			h2 {
				color: white;
			}	
		}	
		/* 
		  Device = Most of the Smartphones Mobiles (Portrait)
		  Screen = B/w 320px to 479px
		*/
		@media (min-width: 320px) and (max-width: 480px)
		{
			body {
				margin:0px;
				padding: 0px;
				background:url("../Image/back1.jpg");
				background-repeat:no-repeat; 
			}
			.container{
				padding: 15px;
				height: 80%;
				width: 100%;
				background-color: rgba(0,0,0,.6);
				position: absolute;
				top: 65%;
				left: 50%;
				transform: translate(-50%,-50%);
				z-index: -1;
			z-index: -1;


			}
			h2 {
				color: white;
			}
		}
		/* 
		  Device = Most of the small Mobiles (Portrait)
		  Screen = B/w 50px to 320px
		*/
		@media (min-width: 50px) and (max-width: 320px)
		{
			body {
				margin:0px;
				padding: 0px;
				background:url("../Image/back1.jpg");
				background-repeat:no-repeat; 
			}
			.container{
				margin-top: 60px;
				padding: 15px;
				height: 100%;
				width: 100%;
				background-color: rgba(0,0,0,.6);
				position: absolute;
				top: 70%%;
				transform: translate(-50%,-50%);
			}
			h2 {
				color: white;
			}
		}

    </style>
    <link rel="stylesheet" href="../Css/NavStyle.css">	
  </head>
  <body>
    <?php  
    	
    ?>
	<nav class="nav-bar background">
        <div class="logo leftNav">
            <img src="../Image/logo.png" alt="Logo of institute">
            <h2 class="InstituteName">Rk Mathematics </h2>
        </div>
        <ul class="nav-list rightNav height-nav-resp visibility-class-resp">
            <li><a href="../index.html" >Home</a></li>
            <div class=" nav-list dropdown">
                <button class="dropbtn">Test</button>
                <div class="dropdown-content">
                <a href="#"> 11Th Class </a>
                <a href="#">12Th Class</a>
                </div>
            </div>
            <div class=" nav-list dropdown">
                <button class="dropbtn">Notes</button>
                <div class="dropdown-content">
                <a href="#"> 11Th Class </a>
                <a href="#">12Th Class</a>
                </div>
            </div>
            
            <li><a href="About.php" >About Us</a></li>
            <li><a href="contact.php" >Contact Us</a></li>
        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>

    <div class="container">
    	<center>
    		<h2>About Director</h2>
    		<div class="img">

    		</div>
    		<p>
    			Bootstrap employs a handful of important global styles and settings that you’ll need to be aware of when using it, all of which are almost exclusively geared towards the normalization of cross browser styles. Let’s dive in.
				Bootstrap employs a handful of important global styles and settings that you’ll need to be aware of when using it, all of which are almost exclusively geared towards the normalization of cross browser styles. Let’s dive in.
				Bootstrap employs a handful of important global styles and settings that you’ll need to be aware of when using it, all of which are almost exclusively geared towards the normalization of cross browser styles. Let’s dive in.

				HTML5 doctype
				Bootstrap requires the use of the HTML5 doctype. Without it, you’ll see some funky incomplete styling, but including it shouldn’t cause any considerable hiccups.
    		</p>
    		<button class="btn">Read more....</button>
    	</center>
    </div>
	<!-- Script for navbar burger action -->
    <script src="../js/Burger.js"></script>
  </body>
</html>