<?php
session_start();
if(isset($_SESSION["user_name"])){

?>
<?php
        $username = $_SESSION["user_name"];
		$imagename = $_FILES['image']['name'];
        $imagetemp = $_FILES['image']['tmp_name'];
        $image_text=  $_POST['image_text'];
        /*
         * Insert image data into database
         */
				include"db.php"; 
	            $connectionStatu = connect_db();
        move_uploaded_file($imagetemp,"profile_image/$imagename");
       if( $imagename !=""){
        
        //Insert image content into database
        $sql = "UPDATE `users` SET `profile_image` = '$imagename', `image_text`='$image_text' WHERE `user_name` like '$username' ";
		$run = mysqli_query($connectionStatu,$sql);
        if($run){
			 $_SESSION["profile_image"]="$imagename";
			 header("Location:home.php");
               
        }else  {  header("Location:myprofile.php?id=error&v=Please Try again");
				} 
	   }else  {  header("Location:myprofile.php?id=error&v=Error: All field are mandatory");
        } 
	?>
	<?php
}else { header("Location:index.php");
}
?>