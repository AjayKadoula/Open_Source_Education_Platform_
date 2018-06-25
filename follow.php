<?php
session_start();
if(isset($_SESSION["user_name"])){

$user_id=$_SESSION["user_id"];
$follow_id= $follow_id=$_POST["follow_id"];


    if($user_id !="" AND $follow_id !=""){

				include"db.php";
	            $connectionStatu = connect_db();
	            $status = follow_user($connectionStatu,$user_id,$follow_id);
}else  {  echo "Please Try Again";
				}

}else { header("Location:index.php");
}
?>
