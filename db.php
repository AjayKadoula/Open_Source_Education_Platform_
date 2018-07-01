<?php

function connect_db(){
    $connectionStatus=mysqli_connect("localhost","root","","users-database");
	if(!$connectionStatus){
		echo "Error to connecting database";
		exit;
	}
	return $connectionStatus;
}
function find_user($connectionStatus,$username,$password)
{
	$query= "SELECT * FROM `users` WHERE `user_name` = '$username' AND `user_password` = '$password' ";
	$result=mysqli_query($connectionStatus,$query);
	if(mysqli_num_rows($result)== 1){
		return mysqli_fetch_assoc($result);
	}
	return false;
}
function find_username($connectionStatus,$username)
{
	$query= "SELECT * FROM `users` WHERE `user_name` = '$username' ";
	$result=mysqli_query($connectionStatus,$query);
	if(mysqli_num_rows($result)== 1){
		return mysqli_fetch_assoc($result);
	}
	return false;
}

function signup_user($connectionStatus,$username,$password,$fname,$sname,$email,$date,$gender)
{
	$query="INSERT INTO `users` (`user_id`,`user_name`, `user_password`, `fname`, `sname`, `user_email`, `user_gender`, `user_dob`, `status`, `profile_image`) VALUES (NULL,'$username', '$password', '$fname', '$sname', '$email', '$gender', '$date', NULL , NULL)";
	$result=mysqli_query($connectionStatus,$query);
	if(mysqli_affected_rows($connectionStatus)== 1){
		return true;
	}
	return false;
}


function is_member($connectionStatus,$username)
{
	$query="SELECT * FROM `users` WHERE `user_name` LIKE '$username'";
	$result=mysqli_query($connectionStatus,$query);
	if(mysqli_num_rows($result)== 1){
		return true;
	}
	return false;
}
$resultsPerPage=5;


function Status($connectionStatus,$username)
{
	$query="UPDATE users SET `Status` = 'Active' WHERE user_name like '$username'";
	$result=mysqli_query($connectionStatus,$query);
	if($result){
		return true;
	}
	return false;
}
function comment($connectionStatus,$user_id,$comment,$post_id)
{
 $query="INSERT INTO `comment` (`comment_id`, `content`, `user_id`,`post_id`,`comment_time`) VALUES (NULL, '$comment', '$user_id','$post_id',CURRENT_TIMESTAMP)";
 $result=mysqli_query($connectionStatus,$query);
 if($result){
   return true;
 }
 return false;
}
function StatusInactive($connectionStatus,$username)
{
	$query="UPDATE users SET `Status` = 'Inactive' WHERE user_name like '$username'";
	$result=mysqli_query($connectionStatus,$query);
	if($result){
		return true;
	}
	return false;
}
function post_ad($connectionStatus,$category,$title,$price,$description,$ad_image,$name,$city,$mobile,$email)
{

	$query=" INSERT INTO `post_ad` (`id`, `category`, `title`, `price`, `description`, `ad_image`, `name`, `city`, `mobile`, `email` ,`time`) VALUES (NULL, '$category', '$title', '$price', '$description', '$ad_image', '$name', '$city', '$mobile', '$email', CURRENT_TIMESTAMP)";
	$result=mysqli_query($connectionStatus,$query);
	if(mysqli_affected_rows($connectionStatus)== 1){
		return true;
	}
	return false;
}
function institute_ad($connectionStatus,$institute,$url,$course)
{

$query="INSERT INTO `institutes` (`id`, `name`, `url`,`course`) VALUES (NULL, '$institute', '$url','$course')";
	$result=mysqli_query($connectionStatus,$query);
	if(mysqli_affected_rows($connectionStatus)== 1){
		return true;
	}
	return false;
}
function single($connectionStatus,$id)
{
	$query= "SELECT * FROM `post_ad` WHERE id = $id ";
	$result=mysqli_query($connectionStatus,$query);
	if(mysqli_num_rows($result)== 1){
		return mysqli_fetch_assoc($result);
	}
	return false;
}
function post_notes($connectionStatus,$subject,$description,$add_pdf,$name,$institute,$mobile,$email,$branch)
{

	$query=" INSERT INTO `notespdf` (`id`, `subject`, `description`, `ad_pdf`, `name`, `institute`, `mobile`, `email`, `course`, `time`) VALUES (NULL, '$subject',  '$description', '$add_pdf', '$name', '$institute', '$mobile', '$email', '$branch', CURRENT_TIMESTAMP)";
	$result=mysqli_query($connectionStatus,$query);
	if(mysqli_affected_rows($connectionStatus)== 1){
		return true;
	}
	return false;
}
function follow_user($connectionStatus,$user_id,$follow_id)
{

	$query=" INSERT INTO `following` (`user_id`, `follower_id`) VALUES ('$user_id', '$follow_id')";
	$result=mysqli_query($connectionStatus,$query);
	if(mysqli_affected_rows($connectionStatus)== 1){
		return true;
	}
	return false;
}


?>
