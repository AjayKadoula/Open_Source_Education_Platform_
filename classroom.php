
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
.box{
	border:1px solid blue;
	margin-top:100px;
	padding:100px;
}
.option{
	margin-top:20px;
	height:100px;
	width:80%;
	color:#00b5ff;
	background-color:white;
	font-size:30px;
	box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	padding:20px;
	text-aling:center;
	font-family:Arial,Courier;

}
.box a{text-decoration:none;}
.box a :hover{

	color:white;
	background-color:#00b5ff;
	font-size:40px;
	box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	text-decoration:none;

	font-family:serif;


}
hr{
	display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid blue;
    margin: 1em 0;
    padding: 0;
}
</style>
</head>
<body >
<center>
<div style="width:80%;">
    <div ><h1> Classroom</h1><hr></div>


<div class="banner text-center">
	  <div class="container">
			<h1 style="margin-top:-20px;">Share Our  <span class="segment-heading">Study/Lectures videos  </span> With Unotes</h1>
			<p>####################################################<br></p>
			<div style="margin-top:-10px;"><a href="postvideos.php">Post Videos Lecture</a></div>
	  </div>

</div>
<hr>
      <div class="box">
	     <a href="videos.php?lecture=free"> <div class="option">Free Lecture</div></a>
		 <a href="videos.php?lecture=paid"> <div class="option">Paid Lecture</div></a>


      </div>

</div>
<br>
<hr style="width:80%;">
<p><b>&copy Unotes.in  Developed By Ajay Kadoula</b></p>
</center>

</body>
</html>



<?php

}else { header("Location:index.php");
}
?>
