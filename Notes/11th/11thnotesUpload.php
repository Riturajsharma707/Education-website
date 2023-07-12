<?php
    if(isset($_FILES['Notes'])){
        echo "<pre>";
       // print_r($_FILES);
        echo "</pre>";
        $file_name = $_FILES['Notes']['name'];
        $file_size = $_FILES['Notes']['size'];
        $file_temp = $_FILES['Notes']['tmp_name'];
        $file_type = $_FILES['Notes']['type'];
        if($file_size != 0){
            move_uploaded_file($file_temp,"upload-11th/". $file_name);
            $message = "File Uploaded Successfully.......";
        }
        else {
            $message = "Please chose a file for upload........";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11Th notes</title>
    <style>
        body{
            margin:0;
            padding:0;
            background-color:purple;
            display:flex;
        }
        form{
            width:500px;
            height:250px;
            margin:0 auto;
            margin-top:50px;
            background-color:aqua;
            text-align:center;
            justify-content: center;
            border-radius:15px;
            box-shadow: blue 3px 4px 95px;
        }
        #Chosefile{
            margin-top:20px;
            border-radius:5px;
            background-color:rgb(247, 209, 141);
            font-style:italic;  
        }
        #btn{
            margin-top:30px;
            width:130px;
            height:30px;
            border:1px solid black;
            border-radius:9px;
            background-color:lightgreen;
        }
        #btn:hover{
            background-color:rgb(9, 167, 9);
            color: white;
            box-shadow: white 13px 4px 95px;
            border:1px solid black;
            font-style:italic;  
            font-size:;
        }
    </style>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <h2>Chose file for upload......</h2> 
        <input type="file" name="Notes" id="Chosefile"></br>
        <p><strong><?php echo $message?></strong></p>
        <input type="submit" name="submits" id="btn">
    </form>
</body>
</html>