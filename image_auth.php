<?php
session_start();
if(isset($_POST["submit"]))
{
  $image = $_FILES['image']['tmp_name'];
    if($image !="" ){
	              
				include"db.php";
	            $connectionStatu = connect_db();
	            $status2 = find_user($connectionStatu,$username);
				
	if(is_array($status2)){
	                      $_SESSION["profile_image"] = $status2["profile_image"];
	                               
								   header("Location:home.php");
}else  {  header("Location:success.php?id=error&v=Error: incorrect username/password");
       }
	
}
   else  {  header("Location:success.php?id=error&v=Error: All field are mandatory");
        }
}
else {   header("Location:success.php?id=error & v=Error: please login to your account");
}
?>
