<?php
session_start();
if(isset($_SESSION["user"])){
   unset($_SESSION["user"]);
   header("Location:logoff_success.php");
}else { header("Location:profile.php");
}
?>

