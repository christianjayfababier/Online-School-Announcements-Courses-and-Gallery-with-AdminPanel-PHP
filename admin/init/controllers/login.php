<?php
		require_once "../model/engine.model.php";;
	if(ISSET($_POST)){
		$conn = new engine_model();
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$status = "Active";
	//	$role = "Administrator";
		
		$get_admin = $conn->login($username, $password);
		if($get_admin['count'] > 0){
			session_start();
			$_SESSION['user_id'] = $get_admin['user_id'];

			echo 1;
		}else{
			echo 0;
		}
	}
?>

 