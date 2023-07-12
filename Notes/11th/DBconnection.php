<?php
// code for connection database
$servername = "localhost";
$username = "root";
$password = "";
$databsename = "rkmathematics1";

$con = mysqli_connect($servername,$username,$password,$databsename);
if (!$con) {
    echo "Connection failed";
}
//end 
?>