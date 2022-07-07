<?php
  require_once "../model/engine.model.php";
	if(ISSET($_POST)){
		$conn = new engine_model();

		  $files = addslashes(file_get_contents($_FILES['post_image']['tmp_name']));
          $post_title = trim($_POST['post_title']);
          $post_description = trim($_POST['post_description']);
		  $post_image ="post_uploads/". addslashes($_FILES['post_image']['name']);
		  move_uploaded_file($_FILES["post_image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/PRMSUSM.EDU.PH/admin/post_uploads/" .   addslashes($_FILES["post_image"]["name"]));
		  
		

		$doc = $conn->add_post($post_title, $post_description, $post_image);
		if($doc == TRUE){
		    echo '<div class="alert alert-success">Post Added Successfully!</div><script> setTimeout(function() {  window.history.go(-1); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Post Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

