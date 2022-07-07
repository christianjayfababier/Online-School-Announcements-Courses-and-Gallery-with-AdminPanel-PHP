<?php
  require_once "../model/engine.model.php";
	if(ISSET($_POST)){
		$conn = new engine_model();

		$complete_name = trim($_POST['complete_name']);
		$email_address = trim($_POST['email_address']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$user_id = trim($_POST['user_id']);

		$user = $conn->edit_user($complete_name, $email_address, $username, $password, $user_id);
		if($user == TRUE){
		    echo '<div class="alert alert-success">Edit User Successfully!</div><script> setTimeout(function() {  window.history.go(-1); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Edit User Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

