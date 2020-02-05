<?php

	$rand = rand(1,10);

	$guess = $_POST['guess'];
	$submit = $_POST['submit'];

	if(isset($submit)){

		if($guess<1 || $guess>10){

			echo " Your guess must be a number between 1 and 10";
		}else{

			if($guess!=$rand){
				echo "Incorrect ,The correct answer is ".$rand;
			}else{
				echo "That is corrcet";
			}
		}

	}else{

		 header("Location:index.php");
		 exit();
	}


?>