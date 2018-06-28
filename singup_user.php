<?php
session_start();
if(isset($_POST["signup"]))
{
$fname=$_POST["fname"];
$sname=$_POST["sname"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$yearOfBirth = $_POST['date'];






  if($fname !="" AND $sname !="" AND $email !="" AND $yearOfBirth != ''  AND $gender !="" AND  $username !="" AND $password !=""){
	              $date = $yearOfBirth;
				        include"db.php";
	              $connectionStatu = connect_db();
			        	$member=is_member($connectionStatu,$username);
  if($member == false){
	              $status = signup_user($connectionStatu,$username,$password,$fname,$sname,$email,$date,$gender);


	if($status==true){
	              $status1 = find_user($connectionStatu,$username,$password);

	if(is_array($status1)){
               $_SESSION["user_id"] = $status1["user_id"];
						   $_SESSION["user_name"] = $status1["user_name"];
	             $_SESSION["user"] = $status1["fname"]." ".$status1["sname"];
						   $_SESSION["user_gender"] = $status1["user_gender"];
						   $_SESSION["user_email"] = $status1["user_email"];
							 $_SESSION["user_dob"] = $status1["user_dob"];
               $user_id = $_SESSION["user_id"];
               $status2 = follow_user($connectionStatu,$user_id,$user_id);
								   header("Location:success.php");
}
}else  {  header("Location:index.php?class=error&e=Please Try again Later");
				}
}
else  {  header("Location:index.php?class=error&e=username:$username already exist");

				}
}
else  {  header("Location:index.php?class=error&e=Error: All field are mandatory");
        }
}
else {   header("Location:index.php?class=error & e=Error: please Retry to signup");
}
?>
