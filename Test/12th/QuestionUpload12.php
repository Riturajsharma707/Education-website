<?php
    include 'DBconectionTest.php';
    if(isset($_POST['submit'])){
        $questionNo = $_POST['question_no'];
        $question = $_POST['question'];
        $correctOption = $_POST['correct_option'];
        // array
        $option = array();
        $option[1] = $_POST['option1'];
        $option[2] = $_POST['option2'];
        $option[3] = $_POST['option3'];
        $option[4] = $_POST['option4'];
        // Query for inserting data in table question
        $query = "INSERT INTO questions12 (";
        $query .= "	question_number,Question_Text)";
        $query .= "VALUES (";
        $query .= "'{$questionNo}','{$question}' ";
        $query .= ")";
        $result = mysqli_query($con,$query);
        
        if($result) {
            foreach($option as $option=>$value) {
                if($value != "") {
                    if($correctOption == $option) {
                        $is_correct = 1;
                    }
                    else {
                        $is_correct = 0;
                    }
                    // Query for inserting data in table question
                    $query = "INSERT INTO options12 (";
                    $query .= "	question_number,is_correct,coptions)";
                    $query .= "VALUES (";
                    $query .= "'{$questionNo}','{$is_correct}','{$value}' ";
                    $query .= ")";

                    $insert_row = mysqli_query($con,$query);
                    if($insert_row) {
                        continue;
                    }
                    else{
                        die("second query for option doesnot be executed".$que);
                    }
                }
            }
            $message = "Question has been uploaded successfully";
        }
    }
    $query = "SELECT * FROM questions12";
    $QUESTIONS = mysqli_query($con,$query);
    $total = mysqli_num_rows($QUESTIONS);
    $next = $total+1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Question</title>
    <link rel="stylesheet" href="../Css/QuestionUploadStyle.css">
</head>
<body>
    Welcome Mr. 
    <h1 class="container">Write a Question and upload it for test.</h1>
    <?php 
        if(isset($message)){
            echo $message;
        }
    ?>
    <div class="container">
        <form action="QuestionUpload12.php" method = "POST">
            <div class="Qno" >
                <label for="Question number"><strong>Question No : </strong></label>
                <input type="number" name="question_no" value="<?php echo $next; ?>">
            </div>
            <div class="item" >
                <label for="Question"><strong>Write a question ?</strong></label><br>
                <input type="text" name="question"  required>
            </div>
    
            <div class="item" >
                <label for="Option"><strong>Option 1 : </strong></label><br>
                <input type="text" name="option1"  required>
            </div>
            <div class="item" >
                <label for="Option"><strong>Option 2 : </strong></label><br>
                <input type="text" name="option2"  required>
            </div>
            <div class="item" >
                <label for="Option"><strong>Option 3 : </strong></label><br>
                <input type="text" name="option3"  required>
            </div>
            <div class="item" >
                <label for="Option"><strong>Option 4 : </strong></label><br>
                <input type="text" name="option4"  required>
            </div>
            <div class="Qno" >
                <label for="Correct option"><strong>Correct Option: </strong></label>
                <input type="number" name="correct_option" value="" required>
            </div>
            <button class="" type="submit" name="submit" >Upload</button>
        </form>
    </div>
    
</body>
</html>