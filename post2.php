
<?php 
	
	include 'core/main.php';
	$check  = new Main;
	$get    = new Main;
	$send   = new Main;
   @$user_id = $_SESSION['user_name'];
   $row1 = $_GET["branch"];
   
   	//fetching user data by user_id
	$data  = $get->user_data($user_id);

	$bachelor  = $get->bachelor($row1);
	$notespdf  = $get->notespdf($row1);




	
?>
