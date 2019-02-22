<?php  
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["vraag1"])){
		$error1 = "veld invullen!";
		$verification = false;
	}if(empty($_POST["vraag2"])){
		$error2 = "veld invullen!";
		$verification = false;
	}if(empty($_POST["vraag3"])){
		$error3 = "veld invullen!";
		$verification = false;
	}if(empty($_POST["vraag4"])){
		$error4 = "veld invullen!";
		$verification = false;
	}if(empty($_POST["vraag5"])){
		$error5 = "veld invullen!";
		$verification = false;
	}if(empty($_POST["vraag6"])){
		$error6 = "veld invullen!";
		$verification = false;
	}if(empty($_POST["vraag7"])){
		$error7 = "veld invullen!";
		$verification = false;
	}else{
		$verification = true;
		}
	}
?>