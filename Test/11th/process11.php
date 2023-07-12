<?php include 'DBconectionTest.php'; ?>
<?php session_start(); ?>
<?php 
	//For first question, score will not be there.
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
 if($_POST){
	//We need total question in process file too
 	$query = "SELECT * FROM questions11";
	$total_questions = mysqli_num_rows(mysqli_query($con,$query));
	
	//We need to capture the question number from where form was submitted
 	$number = $_POST['number'];
	
	//Here we are storing the selected option by user
 	$selected_option = $_POST['choice'];
	
	//What will be the next question number
 	$next = $number+1;
	
	//Determine the correct choice for current question
 	$query = "SELECT * FROM options11 WHERE question_number = $number AND is_correct = 1";
 	 $result = mysqli_query($con,$query);
 	 $row = mysqli_fetch_assoc($result);

 	 $correct_option = $row['id'];
	
	//Increase the score if selected cohice is correct
 	 if($selected_option == $correct_option){
 	 	$_SESSION['score']++;
 	 }
		//Redirect to next question or final score page. 
 	 if($number == $total_questions){
 	 	header("LOCATION: Result11.php");
 	 }else{
 	 	header("LOCATION: TakeTest11.php?n=". $next);
 	 }

 }



?>