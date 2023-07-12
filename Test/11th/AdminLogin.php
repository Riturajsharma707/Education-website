<?php
$login = false;//This variable used for show alert when our signup successfully done.
$Showerror = false;//This variable used for show alert when our password and conformed password both are not matched.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // INCLUDING DATABASE CONNECTION FILE
    include 'DBconnection.php';
    
    // GETTING FORM DATA
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    

    $exist = false;
    //check whether this user name exist
    $Existsql = "SELECT * FROM `admin` WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con,$Existsql);
    $num = mysqli_num_rows($result);
	if($num==1) {
		$login = true;
		session_start();
		$_SESSION['login'] = true;
		$_SESSION['Username'] = $username;
		header("location:QuestionUpload11.php");
	}
    else {
            $Showerror = true;
    }
}

?>

<! DOCTYPE>
<html>
	<head>
		<title>
			Login
		</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<!-- link for font style -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
    	<link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../Css/LoginStyle.css">
		<!-- <link rel="stylesheet" href="../Css/NavStyle.css"> -->

	</head>
	
	<body>
	<!-- <nav class="nav-bar background">
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
            
            <li><a href="./PAGES/About.php" >About Us</a></li>
            <li><a href="./PAGES/contact.php" >Contact Us</a></li>
        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav> -->

		<?php
			// show message when successfully sign up
			if($login ){
				echo '
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Success!</strong> Your are login
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
			}
			// show message when password and conformed password both are not matched;
			if($Showerror){
				echo '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Error!</strong> No records
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
			}
		?>
		<div class="container">
			<div class="row">
			  <div class="col-lg-10 col-xl-9 mx-auto">
				<div class="card card-signin flex-row my-5">
				  <div class="card-img-left d-none d-md-flex">
					<!-- Background image for card set in CSS! -->
					<h1>if you start any work then
						don't stop untile finished that.</h1>
					<!-- <img src="./background.jpg" alt="">-->
				  </div>
				  <div class="card-body">
					<h5 class="card-title text-center"><strong>Admin Login...</strong></h5>
					

					<form class="form-signin" action="" method="post">
						<strong> User Name</strong>
					  <div class="form-label-group">
						<input type="text" id="inputUserame" name="Username" class="form-control" placeholder="inputUserame" required autofocus>
					  </div>
					  <hr>

					  <div class="form-label-group">
						<input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Password" required>
						<label for="inputPassword">Password</label>
					  </div>
					  
					  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
					  <hr class="my-4">
					</form>


				  </div>
				</div>
			  </div>
			</div>
		 </div>

		 <!-- Script for navbar burger action -->
		 <script src="./js/Burger.js"></script>
	</body>
</html>