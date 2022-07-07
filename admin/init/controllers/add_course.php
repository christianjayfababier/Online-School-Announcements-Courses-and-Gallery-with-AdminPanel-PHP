<?php
  require_once "../model/engine.model.php";
	if(ISSET($_POST)){
		$conn = new engine_model();
		$course_name = trim($_POST['course_name']);
		$course_description = trim($_POST['course_description']);
        $course_abbreviation = trim($_POST['course_abbreviation']);
		$course = $conn->add_course($course_name, $course_description,$course_abbreviation);
		if($course == TRUE){
		    echo '<div class="alert alert-success">Course Added Successfully!</div><script> setTimeout(function() {  window.history.go(-1); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Course Failed to Add!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

