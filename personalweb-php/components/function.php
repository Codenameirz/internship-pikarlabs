<?php

	if(isset($_POST['submit'])){
		$to = "purwantoharis499@gmail.com";
		$from = $_POST['from'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$mail = 'Dari : '.$from;

		$mailTerkirim = true;

		mail($to, $subject, $message, $mail);
	}

	function getId($input,$id){
		$index = null;

		foreach($input as $key => $val){
			if($key == $id){
				$index = true;
			}
		}
		return $index;
	}

?>