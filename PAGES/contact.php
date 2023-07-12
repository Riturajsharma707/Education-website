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
    <link rel="stylesheet" href="../Css/contactStyle.css">
	<link rel="stylesheet" href="">
    <title>contact</title>
    <link rel="stylesheet" href="../Css/NavStyle.css">	
  </head>
  <body>
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
    	<div class="row"> 	
	    	<div class="FormDiv col-8">
		    	<form class="" action="https://formspree.io/f/xoqylnpj" method="POST">
		    		<div class="row">
		    			<div class="col-4 form-group">
		    				<label>First Name*: </label>
		    				<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" aria-label="First name" required>
		    			</div>
		    			<div class="col-4 form-group" style="float: left;">
		    				<label>Last Name*: </label>
		    				<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" aria-label="Last name" required>
		    			</div>
		   			</div>
		   			<div class="row">
		    			<div class="col-4 form-group">
			   				<label>Email-id*: </label>
			   				<input type="text" class="form-control" id="email" name="email" placeholder="Email-id" aria-label="Email-id" required>
			   			</div>
			   			<div class="col-4 form-group" style="float: left;">
		    				<label>Mobile Number*: </label>
		    				<input type="text" id="mobileno" name="mobileno" class="form-control" placeholder="Mobile Number" aria-label="Mobile Number">
		    			</div><br>
		    			<div class="form-group">	
                            <label>Message*</label>
		    				<textarea name="message" id="message" placeholder="Message please........" cols="30" rows="6" required></textarea>
		    			</div>
		    			<div class="row">
		    				<button type="submit" class="SubmitBtn" id="submit" name="submit">Submit</button>
		    			</div>
		    		</div>
		    	</form>
	    	</div>
    	</div>
    </div>
    <!-- Script for navbar burger action -->
    <script src="../js/Burger.js"></script>
    
  </body>
</html>