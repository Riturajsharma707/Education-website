<?php 
include 'DBconectionTest.php';
$query = "SELECT * FROM questions12";
$total_questions = mysqli_num_rows(mysqli_query($con,$query));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartUp</title>
    <style>
        body{
            background-color: rgb(12, 50, 65);
        }
        .container{
            width: 60%;
            margin: 10% auto;
            align-items: center;
            text-align: center;
            justify-content: center;
            color: white    ;
        }
        .container li{
            list-style: none;
        }
        .stbtn{
            background-color: lightgreen;
            width: 150px;
            height: 35px;
            margin-top: 25px;
            margin-bottom: 25px;
            border: 1px solid blue;
            border-radius: 9px;
        }
        .stbtn:hover{
            background-color: rgb(50, 150, 47);
            border: 1px solid black;           
        }
        a{
            text-decoration: none;
            padding: 6px 50px;
            /* background-color: rgb(23, 23, 43); */
            font-size: 20px;
            font-style: italic;
            color: black;
        }
        a:hover{
            color: rgb(51, 3, 3);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Click start button for Take Test</h2>
        <ul>
            <li><strong>Total Number of Question : </strong><?php echo $total_questions; ?></li>
            <li><strong>Type : </strong>Multiple choice</li>
            <li><strong>Estimate Time : </strong><?php echo $total_questions*1; ?></li>
        </ul>
        <button class="stbtn" ><a href="TakeTest12.php?n=1" ><strong>Start</strong></a> </button>
    </div>
</body>
</html>