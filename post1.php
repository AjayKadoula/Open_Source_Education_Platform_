
<?php
session_start();
		if(isset($_POST["submit"])){
	
         
        $username = $_SESSION["user_name"];
		$imagename = $_FILES['post_image']['name']; 
        $imagetemp = $_FILES['post_image']['tmp_name'];
        $image_text=  $_POST['status'];
        /*
         * Insert image data into database
         */
        if($username !="" AND $imagename !="" OR $image_text !="")  {
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'users-database';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
       
                 
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        move_uploaded_file($imagetemp,"images/posts/$imagename");
       
        
        //Insert image content into database
        $sql = "INSERT INTO `posts` (`post_id`, `user_id_p`, `query`, `status_image`, `status_time`) VALUES (NULL, '$username', '$image_text', '$imagename', CURRENT_TIMESTAMP)";
		$run = mysqli_query($db,$sql);
        if($run){
			 
              header("Location:home.php");
               
        }else  {  header("Location:home.php?id=error&v=Please Try again");
				} 
		}else  {  header("Location:home.php?id=error&v=Please Try again");
				} 
    }
?>