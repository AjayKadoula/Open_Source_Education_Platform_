
<?php
session_start();
if(isset($_SESSION["user_name"])){
include 'bar\navigation_bar.php';




?>

<!doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<title> Books</title>
<style>
body{

	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwIXqs81nYwzSqqIykOqY56RMBQ-QmK_EB5dMqyyX67yzlJLXH");
}
.banner {
	background:url('img/banner1.jpg') no-repeat 0px 0px;
	background-size:cover;
	min-height:240px;
	padding:45px 0 0 0;
}

.banner h1 {
	color:#fff;
	font-size: 45px;
}
.banner p {
    color: #fff;
    margin: 10px 0 30px 0;
    font-size: 18px;
}
.banner a {
	text-decoration: none;
    color: #fff;
    font-size: 17px;
    background-color: #00b5ff;
    padding: 10px 20px;
}
.banner a:hover {
	background:blue;
hr{
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #00b5ff;
    margin: 1em 0;
padding: 0;}
}
</style>
</head>
<body >
<center>
<div style="width:80%;">
    <div ><h1> Classroom</h1><hr></div><br>

<hr style="
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid blue;
    margin: 1em 0;
    padding: 0;
">
<div class="banner text-center">
	  <div class="container">
			<h1 style="margin-top:-20px;">Share Our  <span class="segment-heading">Study videos  </span> With Unotes</h1>
			<p>####################################################<></p>
			<div style="margin-top:-10px;"><a href="#">Post Videos Lecture</a></div>
	  </div>
</div>
</div>
</center>

</body>
</html>



<?php

}else { header("Location:index.php");
}
?>
