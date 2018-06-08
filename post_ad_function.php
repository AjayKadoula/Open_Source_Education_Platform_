<?php


if(isset($_POST["post"]))
{
	
	


$category =$_POST["category"];
$title=$_POST["title"];
$price=$_POST["price"];
$description=$_POST["description"];
$ad_image = $_FILES['post_image']['name']; 
$imagetemp = $_FILES['post_image']['tmp_name'];
$name=$_POST["name"];
$city=$_POST["city"];
$mobile=$_POST["mobile"];

$email = $_POST['email'];






    if($category !="" AND $title !=""AND $price !="" AND $description !="" AND $ad_image != ''  AND $name !="" AND $city !="" AND  $mobile !="" AND $email !=""){
	              
				include"db.php";
	            $connectionStatu = connect_db();
				
               move_uploaded_file($imagetemp,"images/ad_post/$ad_image");
       
				
	            $status = post_ad($connectionStatu,$category,$title,$price,$description,$ad_image,$name,$city,$mobile,$email);
				
	if($status==true){ 
	                 
	                   header("Location:books.php");
	                
}else  {  header("Location:post-ad.php?class=error&e=Please Try again Later");
				} 
	
}
else  {  header("Location:post-ad.php?class=error&e=Error: All field are mandatory");
        }

}
else {   header("Location:post-ad.php?class=error & e=Error: please Retry to post-ad");
}


if(isset($_POST["institute"]))
{
	
$course=	$_POST["course"];

$url= $_POST["url"];

$institute= $_POST["institute_name"];





    if($institute !="" AND $url!=""AND $course !=""  ){
	              
				include"db.php";
	            $connectionStatu = connect_db();
       
				
	            $status = institute_ad($connectionStatu,$institute,$url,$course);
				
	if($status==true){ 
	                 
	                   header("Location:bachelor.php?branch=$course");
	                
}else  {  header("Location:postinstitute.php?class=error&e=Please Try again Later");
				} 
	
}
else  {  header("Location:postinstitute.php?class=error&e=Error: All field are mandatory");
        }

}
else {   header("Location:postinstitute.php?class=error & e=Error: please Retry to post-ad");
}



?>