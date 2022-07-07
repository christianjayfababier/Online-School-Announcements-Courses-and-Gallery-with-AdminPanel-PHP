<?php
  require_once "../model/engine.model.php";
	if(ISSET($_POST)){
		$conn = new engine_model();

		  $files = addslashes(file_get_contents($_FILES['uploaded_image']['tmp_name']));
		  $img_title = trim($_POST['img_title']);
          $img_desc = trim($_POST['img_desc']);
		  $img_style = trim($_POST['img_style']);
		  $uploaded_image ="post_uploads/". addslashes($_FILES['uploaded_image']['name']);
		  move_uploaded_file($_FILES["uploaded_image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/PRMSUSM.EDU.PH/admin/post_uploads/" .   addslashes($_FILES["uploaded_image"]["name"]));
		  
		

		$img = $conn->add_img($img_title, $img_desc, $img_style, $uploaded_image);
		if($img == TRUE){
		    echo '<div class="alert alert-success">Image Added Successfully!</div><script> setTimeout(function() {  window.history.go(-1); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Image Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

 