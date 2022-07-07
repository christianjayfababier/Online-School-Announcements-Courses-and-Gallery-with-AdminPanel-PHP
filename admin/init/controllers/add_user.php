<?php
  require_once "../model/engine.model.php";
	if(ISSET($_POST)){
		$conn = new engine_model();

		$complete_name = trim($_POST['complete_name']);
		$email_address = trim($_POST['email_address']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		$user = $conn->add_user($complete_name, $email_address, $username, $password);
		if($user == TRUE){
		    echo '<div class="alert alert-success">Add User Successfully!</div><script> setTimeout(function() {  window.history.go(-1); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Add User Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

 