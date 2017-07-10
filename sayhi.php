<?php 
	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		echo "Wellcome to: ".$email;
	}
?>