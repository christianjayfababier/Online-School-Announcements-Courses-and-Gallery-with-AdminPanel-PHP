<?php
  require_once "../model/engine.model.php";
	if(ISSET($_POST)){
		$conn = new engine_model();
		$img_id = trim($_POST['img_id']);
		$img = $conn->delete_img($img_id);
		if($img == TRUE){
		    echo '<div class="alert alert-success">Image Deleted Successfully!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Delete Image Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

