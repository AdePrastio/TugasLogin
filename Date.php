<?php 

	$myemail	= "AdePrastio@gmail.com";
	$mypass		= "17062017";

	if (isset($_POST['login'])) {
		$email 	= $_POST['email'];
		$pass 	= $_POST['password'];
		if ( $email == $myemail and $pass == $mypass ) {
			if ( isset($_POST['remember'])  ) {
				 setcookie('email', $email, time()+60*60*7);
				 setcookie('pass', $pass, time()+60*60*7);
			}
			 ?>