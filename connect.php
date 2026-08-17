<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

//database connection
	$conn = new mysqli('localhost', '_GGabrielZeaph', 'eS1f0XGHFlsL1fHf', 'GGabrielZeaph_phpForm');
	if($conn->connect_error){
		die("Error Connecting to Database: " . $conn->connect_error);
	}else{
		$result = $conn->prepare("insert into contact(name, email, phone, message)
			values(?, ?, ?, ?)");
		$result->bind_param("ssss",$name,$email,$phone,$message);
		$result->execute();
		echo "Submission successful, thank you. We will be in contact with you soon.";
		$result->close();
		$conn->close();
	}
?>