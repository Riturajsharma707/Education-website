<?php
$showAlert = false;//This variable used for show alert when our signup successfully done.
$Showerror = false;//This variable used for show alert when our password and conformed password both are not matched.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // INCLUDING DATABASE CONNECTION FILE
    include '../PAGES/DBconnection.php';
    
    // GETTING FORM DATA
    $name = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mob = $_POST['phone'];

    $exist = false;
    //check whether this user name exist
    $Existsql = "SELECT * FROM `register` WHERE email = '$email';";
    $result = mysqli_query($con,$Existsql);
    $numExistRow = mysqli_num_rows($result);
    if($numExistRow >0) {
        $exist = true;
        $Showerror = 'User Already Exist!!';

    }
    else {
        $exist = false;
        if(($password == $cpassword)) {
            // query for inserting data in database
            $sql = "INSERT INTO REGISTER VALUES ('$name','$password','$cpassword','$gender','$age','$address','$email','$mob')";
            $result = mysqli_query($con,$sql);
            if($result){
                $showAlert = true;
            }
        }
        else {
            $Showerror = 'PassWord do not match!!';;
        }
    }
}

// get FORM data from item fields

// echo "$name,$pass,$conpass,$gender,$age,$address,$email,$mob";

// $Query = "INSERT INTO REGISTER VALUES ('$name','$pass','$conpass','$gender','$age','$address','$email','$mob')";
// $RUN = mysqli_query($con,$Query);
// echo "$RUN";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link for Font style -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&family=Original+Surfer&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <script src="./SignUpJs.js"></script>
    <!-- link for font style -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
    	<link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Css/RegisterStyle.css">
    <link rel="stylesheet" href="../Css/NavStyle.css">

    <title>Register</title>
    <style>
        .container {
            margin: 5%;
            padding: 25px;
        }

        .DivLeft {
            /* border-radius: 25px; */
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
            background-image: url(https://source.unsplash.com/weekly?farmer/all);
        }

        .FormDiv {
            background-color: rgb(217, 242, 250);
            padding: 15px;
            border-left: 1px solid black;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
            justify-items: auto;

        }

        .FormDiv h3 {
            font-family: 'Orelega One', cursive;
            font-family: 'Original Surfer', cursive;
        }

        form {
            font-family: 'Orelega One', cursive;

        }

        .signUpBtn {
            margin-top: 10px;
            height: 40px;
            padding: 0px;
            width: 110px;
            border-radius: 15px;
        }

        .signInlink {
            color: black;
            font-size: 20PX;
        }

        .btn-google {
            margin: 10px 10px 10px 10px;
            font-size: 18px;
            background-color: rgb(253, 55, 6);
            border: 1px solid black;
            border-radius: 25px;
        }

        .btn-google:hover {
            background-color: rgb(202, 47, 8);
            border: 2px solid black;
        }

        .btn-google svg {
            color: white;
        }

        .btn-facebook {
            font-size: 18px;
            background-color: rgb(58, 58, 240);
            border: 1px solid black;
            border-radius: 25px;
        }

        .btn-facebook:hover {
            background-color: rgb(6, 6, 199);
            border: 2px solid black;
        }

        .btn-facebook svg {
            color: white;
        }

        /*Media Query for small screen*/
        @media only screen and (max-width: 600px) {
            .container {
                /* background-color: aqua; */
                margin: 0%;
            }

            .DivLeft {
                /* border-radius: 25px; */
                border-top-left-radius: 0px;
                border-bottom-left-radius: 0px;
                background-image: url(https://source.unsplash.com/weekly?farmer/all);

            }

            .FormDiv {
                border-top-right-radius: 0px;
                border-bottom-right-radius: 0px;
                background-image: url(https://source.unsplash.com/weekly?/farmer);

            }
    </style>
</head>

<body>
<nav class="nav-bar background">
        <div class="logo leftNav">
            <img src="../Image/RKMathematicsLogo.png" alt="Logo of institute" style="width: 80px;height: 70px; margin-top: 0;">
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

<!-- alert -->
    <?php
        // show message when successfully sign up
        if($showAlert ){
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your account is created and you can Login...
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        // show message when password and conformed password both are not matched;
        if($Showerror){
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong>'.$Showerror.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    ?>
    <div class="container">
        <div style="border-right: 1px solid black;" class="row">
            <div class="DivLeft col col-6">
                <h1>hello</h1>
                <h2>hello</h2>
                <h3>hello</h3>
                <h4>hello</h4>
                <h5>hello</h5>
                <h6>hello</h6>
            </div>
            <div class="FormDiv col-6">
                <form class="form-signin" action="../PAGES/Register.php" method="post">
                    <br>
                    <h3>Register Please....</h3>
                    <div class="form-label-group">
                        <label for="inputUserame">Username</label>
                        <input type="text" id="inputUserame" name="username" class="form-control" placeholder="Username"
                            required autofocus>
                    </div>

                    <div class="form-label-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" id="inputPassword" name="password" class="form-control"
                            placeholder="Password" required>
                    </div>

                    <div class="form-label-group">
                        <label for="inputConfirmPassword">Confirm password</label>
                        <input type="password" id="inputConfirmPassword" name="confirmpassword" class="form-control"
                            placeholder="Password" required>
                    </div>

                    <hr>

                    <div class="form-label-group">
                        <label for="Gender">Gender</label>
                        <input type="text" id="gender" name="gender" class="form-control" placeholder="Gender" required>
                    </div>
                    <div class="form-label-group">
                        <label for="Age">Age</label>
                        <input type="number" id="age" name="age" class="form-control" placeholder="Age" required>
                    </div>
                    <div class="form-label-group">
                        <label for="Address">Address</label>
                        <input type="text" id="address" name="address" class="form-control" placeholder="Address"
                            required>
                    </div>
                    <div class="form-label-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" id="inputEmail" name="email" class="form-control"
                            placeholder="Email address" required>
                    </div>
                    <div class="form-label-group">
                        <label for="phone">Mobile Number</label>
                        <input type="number" id="phone" name="phone" class="form-control" placeholder="Mobile Number"
                            required>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block signUpBtn" type="submit">Register</button>
                    <a class="d-block text-center mt-2 small LogInlink" href="Login.php">LogIn</a>
                    <hr class="my-4">
                    <button class="btn btn-lg btn-google btn-block" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor"
                            class="bi bi-google" viewBox="0 0 16 16">
                            <path
                                d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                        </svg>
                        <i class="bi bi-google"></i> Register with Google</button>

                    <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg> Register with Facebook</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Script for navbar burger action -->
    <script src="./js/Burger.js"></script>
    
</body>

</html>