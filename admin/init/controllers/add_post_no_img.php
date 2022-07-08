<?php
  require_once "../model/engine.model.php";
	if(ISSET($_POST)){
		
		
		  $conn = new engine_model();

          $post_title = trim($_POST['post_title']);
          $post_description = trim($_POST['post_description']);
		 
		

		$doc = $conn->add_post_no_img($post_title, $post_description);
		if($doc == TRUE){
		    echo '<div class="alert alert-success">Post Added Successfully!</div><script> setTimeout(function() {  window.history.go(-1); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Post Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

