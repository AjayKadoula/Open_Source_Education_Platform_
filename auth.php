<?php
session_start();
if(isset($_POST["submit"]))
{
$username=$_POST["username"];
$password=$_POST["password"];
    if($username !="" AND $password !=""){
	              
				include"db.php"; 
	            $connectionStatu = connect_db();
	            $status = find_user($connectionStatu,$username,$password);
				
	if(is_array($status)){
	                      $_SESSION["user"] = $status["fname"]." ".$status["sname"];
						   $_SESSION["user_name"] = $status["user_name"];
                            $_SESSION["user_email"]= $status["user_email"];
						   $image = $status["profile_image"];
						   if (empty($image)) $image = "download.png";
	                        $_SESSION["profile_image"] = $image;
								   header("Location:home.php");
}else  {  header("Location:index.php?id=error&v=Error: incorrect username/password");
       }
	
}
   else  {  header("Location:index.php?id=error&v=Error: All field are mandatory");
        }
}
else {   header("Location:index.php?id=error & v=Error: please login to your account");
}
?>
