
<?php

	include 'core/main.php';
	$check  = new Main;
	$get    = new Main;
	$send   = new Main;
  @$user_id = $_SESSION['user_name'];
 	@$id = $_SESSION['user_id'];


   //fetching user data by user_id
	$data  = $get->user_data($user_id);
	// fetching posts from database
	$post  = $get->posts($id);

	// fetching posts from database
	$adpost  = $get->adposts();
	//check user submit  data
	$followerlist  = $get->followerlist();
	$followerlistall  = $get->followerlistall();
	$followerCount  = $get->followerCount($id);
	$followingCount  = $get->followingCount($id);
	$postsCount= $get->postsCount($user_id);





?>
