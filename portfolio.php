<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
	$from = 'From: portfolio'; 
    $to = 'nando@competa.com'; 
    $subject = 'portfolio';
	
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
	
	include_once 'php/database.php';
	
	if ($_POST['submit']) {
		$sql = $conn->prepare("INSERT INTO `contact` (`emailadres`, `name`, `message`, `subject`) VALUES (? , ?, ?, ?); ");
		if($sql->execute(array($email,$name,$message,$subject))){
			header('Location: index.php?email=true#contact');
			
			echo '<p>Your message has been sent!</p>';
		}
			
		else { 
			echo '<p>Something went wrong, go back and try again!</p>'; 
		}
}
	echo "hello";
?>