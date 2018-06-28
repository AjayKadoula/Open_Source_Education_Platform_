<?php
session_start();
if(isset($_SESSION["user_name"])){

if(isset($_POST["submit"])){


        $username = $_SESSION["user_name"];
	     	$imagename = $_FILES['image']['name'];
        $imagetemp = $_FILES['image']['tmp_name'];
        $image_text=  $_POST['image_text'];
        /*
         * Insert image data into database
         */

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
        move_uploaded_file($imagetemp,"profile_image/$imagename");
      if( $imagename !=""){

        //Insert image content into database
        $sql = "UPDATE `users` SET `profile_image` = '$imagename', `image_text`='$image_text' WHERE `user_name` like '$username' ";
		    $run = mysqli_query($db,$sql);
      if($run){
			  $_SESSION["profile_image"]="$imagename";
			  header("Location:home.php");

        }else  {  header("Location:success.php?id=error&v=Please Try again");
				}
	   }else  {  header("Location:success.php?id=error&v=Error: All field are mandatory");
        } }


}else { header("Location:index.php");
}
?>
