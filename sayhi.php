<?php
	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		if ($email == 'admin@gmail.com' && $password == 'admin') {
			echo "Welcome to Summoner's Rift";
		} else {
			echo "Login fail!!!";
		}
	}
?>
