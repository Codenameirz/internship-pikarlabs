<?php

	include "data.php";

	if(isset($_POST['submit'])){
		$to = "purwantoharis499@gmail.com";
		$from = $_POST['from'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$mail = 'Dari : '.$from;

		mail($to, $subject, $message, $mail);
	}

?>