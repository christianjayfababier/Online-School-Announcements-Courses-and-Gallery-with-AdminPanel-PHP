<?php
  require_once "../model/engine.model.php";
	if(ISSET($_POST)){
		$conn = new engine_model();
		$post_id = trim($_POST['post_id']);
		$post = $conn->delete_post($post_id);
		if($post == TRUE){
		    echo '<div class="alert alert-success">Post Deleted Successfully!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Delete Post Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

