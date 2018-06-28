<?php
session_start();
$username = $_SESSION["user_name"];
include"db.php";
$connectionStatu= connect_db();
$Status = StatusInactive($connectionStatu,$username);
if(isset($_SESSION["user_name"])){
   unset($_SESSION["user_name"]);
   header("Location:logoff_success.php");
}else { header("Location:home.php");
}
?>
