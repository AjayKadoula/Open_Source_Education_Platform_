<?php
session_start();
if(isset($_SESSION["user"])){
include './bar\navigation_bar.php';

if(isset($_GET["branch"])){
	
         
       $row1=$_GET["branch"];
         
}



?>
<!DOCTYPE html>
<html>
<head>
<title>post_books</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
.body{
	max-width:1150px;
	
	
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
}
/*-- Post ad --*/
.post-ad-form {
    border: 1px solid blue;
    padding: 40px;
    margin-bottom: 60px;
}
.post-ad-form form label {
    font-size: 15px;
    text-transform: capitalize;
    margin-bottom: 8px;
    color: #000;
    margin-top: 10px;
    display: BLOCK;
    font-weight: 400;
    float: left;
    width: 16%;
    text-align: right;
    margin-right: 4%;
}
.post-ad-form form label span {
	color:red;
}
.post-ad-form input[type="text"] {
    padding: 10px 10px 10px 10px;
    width: 70%;
    margin-bottom: 25px;
    border: 1px solid blue;
    outline: none;
    color: #555;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
	float: left;
}
.post-ad-form input[type="number"] {
    padding: 10px 10px 10px 10px;
    width: 70%;
    margin-bottom: 25px;
    border: 1px solid blue;
    outline: none;
    color: #555;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
	float: left;
}
.post-ad-form textarea {
    height: 180px;
    outline: none;
    resize: none;
	padding: 10px 10px 10px 10px;
    width: 70%;
    margin-bottom: 25px;
    border: 1px solid blue;
    outline: none;
    color: #555;
}
.post-ad-form input[type="text"]:hover,.post-ad-form textarea:hover {
    border: 1px solid blue;
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}

.post-ad-form input[type="number"]:hover,.post-ad-form textarea:hover {
    border: 1px solid blue;
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
.post-ad-form form select {
    border: 1px solid blue;
    background-color: #fff;
    padding: 8px;
    width: 30%;
    margin-bottom: 25px;
}
.post-ad-form input[type="submit"] {
    background: blue;
    color: white;
    -webkit-appearance: none;
    border: none;
    text-transform: uppercase;
    position: relative;
    padding: 10px 50px;
    font-size: 20px;
    letter-spacing: 0.1em;
    font-weight: 300;
    -webkit-transition: all 333ms ease-in-out;
    -moz-transition: all 333ms ease-in-out;
    -o-transition: all 333ms ease-in-out;
    -ms-transition: all 333ms ease-in-out;
    transition: all 333ms ease-in-out;
    margin-top: 20px;
	float: right;
}

legend
{
	font-weight: bold;
	color: #333;
}

#filedrag
{
	    display: none;
    font-weight: 600;
    text-align: center;
    padding: 25px 0;
    margin: 25px 0;
    color: blue;
    border: 2px dashed blue;
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    -ms-border-radius: 0px;
    -o-border-radius: 0px;
    cursor: default;
    font-size: 20px;
}

#filedrag.hover
{
	color: #f00;
	border-color: #f00;
	border-style: solid;
	box-shadow: inset 0 3px 4px #888;
}

img
{
	max-width: 100%;
}

pre
{
	width: 95%;
	height: 8em;
	font-family: monospace;
	font-size: 0.9em;
	padding: 1px 2px;
	margin: 0 0 1em auto;
	border: 1px inset #666;
	background-color: #eee;
	overflow: auto;
}

#messages {
    padding: 15px 10px;
    margin: 15px 0;
    border: 1px solid blue;
}

#messages p
{
	    color: #555;
		font-size:14px;
}

#progress p
{
	display: block;
	width: 240px;
	padding: 2px 5px;
	margin: 2px 0;
	border: 1px inset #446;
	border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
	background: #eee url("progress.png") 100% 0 repeat-y;
}

#progress p.success
{
	background: #0c0 none 0 0 no-repeat;
}

#progress p.failed
{
	background: #c00 none 0 0 no-repeat;
}
.photos-upload-view{
	float:left;
	width: 70%;
	margin-top: 10px;
}
.upload-ad-photos {
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    padding: 20px 0;
    margin: 20px 0;
}
.personal-details label {
    font-size: 15px;
    text-transform: capitalize;
    margin-bottom: 8px;
    color: #000;
    margin-top: 10px;
    display: BLOCK;
    font-weight: 400;
    float: left;
    width: 16%;
    text-align: right;
    margin-right: 4%;
}
p.post-terms {
    margin-left: 20%;
    color: #000;
    font-size: 15px;
    letter-spacing: 1px;
}
p.post-terms a {
    color: blue;
}
.main-grid-border{
    border-bottom: 3px solid #F4F4F4;
}
body{
	
	background-image: url("https://st2.depositphotos.com/1280399/6228/i/950/depositphotos_62289735-stock-photo-white-background-smooth-metal-texture.jpg");
}
.banner {
	background:url('img/banner1.jpg') no-repeat 0px 0px;
	background-size:cover;
	min-height:240px;
	padding:45px 0 0 0;
}

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid blue;
    margin: 1em 0;
    padding: 0; 
}
</style>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	

</head>
<body>

	<center>	
	<div class="body">
			<h2 class="head">Add Your Institute</h2><hr><br><br><br><br>
	<div class="banner text-center">
	  <div class="container">    
			<h1>Sell or Advertise   <span class="segment-heading">    anything online </span> with Unotes</h1>
			<p>"Try not to become a man of success. Rather become a man of value."<br>

-- Albert Einstein</p>
			<a href="notes.php">Go For More Notes</a>
	  </div></center>
	</div><br>
	<!-- Submit Ad --><br><br><br>
	<div class="submit-ad main-grid-border">
		<div class="container">
			<div class="post-ad-form">
				
			    <form id="upload" action="post_ad_function.php" method="POST" enctype="multipart/form-data">
						<label>Course Name <span>*</span></label>
						<input  readonly="readonly" type="text" name="course" value="<?php echo $row1;?>" >
						<div class="clearfix"></div><br>
					<div class="personal-details"><br><br>
					
						<label>Your institute Name <span>*</span></label>
						<input type="text" name="institute_name" class="name" placeholder="uietkuk">
						<div class="clearfix"></div><br>
						
					<label>Your institute URL <span>*</span></label>
					<input type="text" name="url" class="phone"  placeholder="https://www.unotes.in/notes/post">
					<div class="clearfix"></div><br><br>
						
					
						<p class="post-terms">By clicking <strong>post Button</strong> you institute will be added</p>
					<input type="submit"  name="institute" value="Post">					
					<div class="clearfix"></div>
					</form>
					</div>
			</div>
		</div>	
	</div>
	</div>

</body>
</html>

<?php	

}else { header("Location:index.php");
}
?>