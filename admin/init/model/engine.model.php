<?php

	require 'config/connection.php';

    class engine_model{

		public $host = db_host;
		public $user = db_user;
		public $pass = db_pass;
		public $dbname = db_name;
		public $conn;
		public $error;
 
		public function __construct(){
			$this->connect();
			
		}

        private function connect(){
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database".$this->conn->connect_error;
				return false;
			}
		}


		public function login($username, $password){
			$conn = mysqli_connect("localhost", "root", "", "prmsu_sm") or die($conn);
			$stmt = $this->conn->prepare("SELECT * FROM `tb_admin` WHERE BINARY `username` = '".mysqli_real_escape_string($conn,$username)."' 
        AND BINARY `password` = '".mysqli_real_escape_string($conn,$password)."' ") or die($this->conn->error);
			$stmt->bind_param("ss", $username, $password);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$valid = $result->num_rows;
				$fetch = $result->fetch_array();
				return array(
					'user_id'=> htmlentities($fetch['user_id']),
					'count'=>$valid
				);
			}
		}

		public function save($complete_name, $email_address, $username, $password){
			$stmt = $this->conn->prepare("INSERT INTO `tb_admin` (`complete_name`,`email_address`,`username`, `password`) VALUES(?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssss", $complete_name, $email_address, $username, $password);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}


		public function add_user($complete_name, $email_address, $username, $password){
			$stmt = $this->conn->prepare("INSERT INTO `tb_admin` (`complete_name`,`email_address`, `username`, `password`) VALUES(?, ?, ?, ?)") or die($this->conn->error);
			 $stmt->bind_param("ssss", $complete_name, $email_address, $username, $password);
			 if($stmt->execute()){
				 $stmt->close();
				 $this->conn->close();
				 return true;
			 }
		 }

		 public function add_post($post_title, $post_description, $post_image){
			$stmt = $this->conn->prepare("INSERT INTO `announcement_posts` (`post_title`, `post_description`, `post_image`) VALUES(?, ?, ?)") or die($this->conn->error);
			 $stmt->bind_param("sss", $post_title, $post_description, $post_image);
			 if($stmt->execute()){
				 $stmt->close();
				 $this->conn->close();
				 return true;
			 }
		 }

		 public function add_post_no_img($post_title, $post_description){
			$stmt = $this->conn->prepare("INSERT INTO `announcement_posts` (`post_title`, `post_description`) VALUES(?, ?)") or die($this->conn->error);
			 $stmt->bind_param("ss", $post_title, $post_description);
			 if($stmt->execute()){
				 $stmt->close();
				 $this->conn->close();
				 return true;
			 }
		 }


		 public function add_img($img_title ,$img_desc, $img_style, $uploaded_image){
			$stmt = $this->conn->prepare("INSERT INTO `tb_gallery` (`img_title`, `img_desc`, `img_style`, `uploaded_image`) VALUES(?, ?, ?, ?)") or die($this->conn->error);
			 $stmt->bind_param("ssss", $img_title, $img_desc, $img_style, $uploaded_image);
			 if($stmt->execute()){
				 $stmt->close();
				 $this->conn->close();
				 return true;
			 }
		 }

		 
		 public function edit_post($post_title, $post_description, $post_id){

			$sql = "UPDATE `announcement_posts` SET  `post_title` = ?, `post_description` = ? WHERE post_id = ?";
			 $stmt = $this->conn->prepare($sql);
			$stmt->bind_param("ssi", $post_title, $post_description, $post_id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}


		public function edit_user($complete_name, $email_address, $username, $password,  $user_id){
			$sql = "UPDATE `tb_admin` SET  `complete_name` = ?, `email_address` = ?, `username` = ?, `password` = ?  WHERE user_id = ?"; 
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param("ssssi", $complete_name, $email_address, $username, $password, $user_id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}

		public function add_course($course_name, $course_description,$course_abbreviation){
			$stmt = $this->conn->prepare("INSERT INTO `tb_course` (course_name, course_description, course_abbreviation) VALUES(?, ?, UPPER(?))") or die($this->conn->error);
			 $stmt->bind_param("sss", $course_name, $course_description,$course_abbreviation);
			 if($stmt->execute()){
				 $stmt->close();
				 $this->conn->close();
				 return true;
			 }
		 }


		 public function edit_course($course_name, $course_description, $course_abbreviation, $course_id){
			$sql = "UPDATE `tb_course` SET  `course_name` = ?, `course_description` = ?, `course_abbreviation` = ?   WHERE `course_id` = ?";
			 $stmt = $this->conn->prepare($sql);
			$stmt->bind_param("sssi", $course_name, $course_description, $course_abbreviation,$course_id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}


		public function user_account($user_id){
			$stmt = $this->conn->prepare("SELECT * FROM `tb_admin` WHERE `user_id` = ?") or die($this->conn->error);
		    $stmt->bind_param("i", $user_id);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$fetch = $result->fetch_array();
				return array(
					'complete_name'=> $fetch['complete_name']
					// 'last_name'=>$fetch['last_name']
				);
			}	
		}


			
	    public function fetchAll_users(){ 
            $sql = "SELECT * FROM  tb_admin ";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		
	    public function fetchAll_posts(){ 
            $sql = "SELECT * FROM  announcement_posts ORDER BY post_date DESC";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		  public function fetchAll_images(){ 
            $sql = "SELECT * FROM  tb_gallery ORDER BY date_uploaded DESC";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		  public function fetchAll_rimages(){ 
            $sql = "SELECT * FROM  tb_gallery  WHERE img_style = 'Regular Image' ORDER BY date_uploaded DESC";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		  public function fetchAll_vimages(){ 
            $sql = "SELECT * FROM  tb_gallery WHERE img_style = 'Panorama' ORDER BY date_uploaded DESC";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		  public function fetchAll_videos(){ 
            $sql = "SELECT * FROM  tb_gallery WHERE img_style = 'Video' ORDER BY date_uploaded DESC";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		  public function fetchAll_courses(){ 
            $sql = "SELECT * FROM  tb_course";
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->get_result();
		        $data = array();
		         while ($row = $result->fetch_assoc()) {
		                   $data[] = $row;
		            }
		         return $data;

		  }

		  
		public function delete_course($course_id){
			$sql = "DELETE FROM tb_course WHERE course_id = ?";
			 $stmt = $this->conn->prepare($sql);
			$stmt->bind_param("i", $course_id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}

		public function delete_post($post_id){
			$sql = "DELETE FROM announcement_posts WHERE post_id = ?";
			 $stmt = $this->conn->prepare($sql);
			$stmt->bind_param("i", $post_id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}

		public function delete_img($img_id){
			$sql = "DELETE FROM tb_gallery WHERE img_id = ?";
			 $stmt = $this->conn->prepare($sql);
			$stmt->bind_param("i", $img_id);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}

 





    }


?>