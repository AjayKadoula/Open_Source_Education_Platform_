<?php
session_start();
if(isset($_SESSION["user_name"])){
   unset($_SESSION["user_name"]);
   header("Location:logoff_success.php");
}else { header("Location:profile.php");
}
?>
