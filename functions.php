<?php 
	// functions.php
	
	function signup($email, $password) {
		
		$database = "if16_romil";
		$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);

		$stmt = $mysqli->prepare("INSERT INTO user_sample (email, password) VALUES (?, ?)");
		echo $mysqli->error;
		
		$stmt->bind_param("ss", $email, $password );

		if ( $stmt->execute() ) {
			echo "salvestamine õnnestus";	
		} else {	
			echo "ERROR ".$stmt->error;
		}
		
	}
	
	
	
	
	
	
	/*function sum($x, $y) {
		
		$answer = $x+$y;
		
		return $answer;
	}
	
	function hello($firstname, $lastname) {
		
		return 
		"Tere tulemast "
		.$firstname
		." "
		.$lastname
		."!";
		
	}
	
	echo sum(123123789523,1239862345);
	echo "<br>";
	echo sum(1,2);
	echo "<br>";
	
	$firstname = "Romil";
	
	echo hello($firstname, "R.");
	*/
?>