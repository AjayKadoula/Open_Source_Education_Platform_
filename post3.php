
<?php 
	
	include 'core/main.php';
	$check  = new Main;
	$get    = new Main;
	$send   = new Main;
   @$user_id = $_SESSION['user_name'];

      $_SESSION['user_name1']=$_GET["username"];
	  $username1=$_SESSION['user_name1'];
   	//fetching user data by user_id
	$data  = $get->user_data($user_id);
    $userpost  = $get->userposts($username1);
	$followerlist  = $get->followerlist();
	$userprofile  = $get->userprofile($username1);




	
?>
