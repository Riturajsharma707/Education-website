<?php 
	include 'DBconectionTest.php';
	session_start(); 
	//Set Question Number
	$number = $_GET['n'];

	//Query for the Question
	$query = "SELECT * FROM questions11 WHERE question_number = $number";

	// Get the question
	$result = mysqli_query($con,$query);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	$query = "SELECT * FROM options11 WHERE question_number = $number";
	$choices = mysqli_query($con,$query);
	// Get Total questions
	$query = "SELECT * FROM questions11";
	$total_questions = mysqli_num_rows(mysqli_query($con,$query));
 	
	
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Page</title>
    <style>
        body{
            background-color: rgb(12, 50, 65);
        }
        .container{
            background-color: rgb(126, 114, 161);
            width: 50%;
            margin:5% 25% 25% 25%;
            align-items: center;
            border: 2px solid gray;
            border-radius: 9px;
            padding: 16px;
            box-shadow:rgb(0, 22, 145) 8px 9px 53px;
            
        }
        .current{
            font-size: 1.5rem;
        }
        .btn{
            background-color: lightgreen;
            width: 100px;
            height: 35px;
            border: 1px solid black;
            border-radius: 9px;
            font-size: large;
            font-style: italic;
            /* margin: 10px 25px 25px 25%; */
        }
        .btn:hover {
            background-color: rgb(30, 219, 30);
            box-shadow: 5px 1.5px;            
        }
        form ul li {
            list-style: none;
        }
        .question{
            font-size: 1.5rem;
        }
        .choicess{
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    
    <main>
        <div class="container">
            <div>
                <p style="font-size: 2em;text-align: center;"><strong>Chose Correct Option........</strong></p>
            </div>
            <div class="current"><strong>Question
                <?php echo $number; ?> of
                <?php echo $total_questions; ?></strong>
            </div>
            <p class="question">
                <strong><?php echo $question['Question_Text']; ?></strong>
            </p>
            <form method="POST" action="process11.php">
                <ul class="choicess">
                    <?php while($row=mysqli_fetch_assoc($choices)){ ?>
                    <li><input type="radio" name="choice" value="<?php echo $row['id']; ?>">
                        <?php echo $row['coptions']; ?>
                    </li>
                    <?php } ?>


                </ul>
                <input type="hidden" name="number" value="<?php echo $number; ?>">
                <input class="btn" type="submit" name="submit" value="Submit">

            </form>


        </div>

    </main>

</body>

</html>