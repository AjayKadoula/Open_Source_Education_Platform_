<?php
session_start();
if(isset($_SESSION["user_name"])){
include 'bar\navigation_bar.php';
include 'post2.php';
$_SESSION["branch"]=$_GET["branch"];
$institute=$_GET["institute"];
?>

<!doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<title> profile</title>
<link rel="stylesheet" href="home.css" type="text/css">
<link rel="stylesheet" href="css\notes.css" type="text/css">
<style>



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
}

.right-content{
	padding:0 18px;
	width: 100%;
	float: center;
}
.content-grid{
	width: 23%;
	float: left;
	text-align: center;
	border: 1px solid rgba(235, 235, 235, 0.53);
	box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.35);
	margin-right:2%;
	margin-bottom:2%;
}
.last-grid{
	margin-right:0px;
}
.content-grid img{
	display:block;
}
.content-grid h3{
	font-family: 'gandhi_sansregular';
	color: #888;
	text-transform: uppercase;
	padding: 10px 0;
	display: block;
	line-height: 1.5em;
	font-size: 0.875em;
}
.content-grid ul li{
	display:inline-block;
}
.content-grid img{
	display:block;
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
}
.content-grid:hover  img{
	-webkit-filter: grayscale(100%);
	opacity: 5;
	transition: all 300ms!important;
	-webkit-transition: all 300ms!important;
	-moz-transition: all 300ms!important;
}
.content-grid ul li a{
	padding:0 5px;
	display:block;
}
.button{
	background: #000;
	padding: 10px;
	cursor: pointer;
	border: none;
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
	color: #FFF;
	outline: none;
	font-family: 'gandhi_sansregular';
	text-transform: uppercase;
	display: block;
	margin: 10px 0 0 0;
	font-size: 0.875em;
}
.button:hover{
	color:#888;
}

.right-content-heading-left{
	float:left;
	padding: 11px 0;
}
.right-content-heading {
	border-bottom: 1px solid #F1F0F6;
	margin-bottom: 20px;
}
.right-content-heading-right{
	float:right;
}
.right-content-heading-left h3{
	font-family: 'gandhi_sansregular';
	color: #888;
	text-transform: uppercase;
	display: block;
}
/*----start-pagenation-----*/
.pagenation{
	float:right;
}
.pagenation ul li{
	display:inline-block;
}
.pagenation ul li a{
	background: #000;
	padding: 10px;
	cursor: pointer;
	border: none;
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
	color: #FFF;
	outline: none;
	font-family: 'gandhi_sansregular';
	text-transform: uppercase;
	display: block;
	font-size: 0.875em;
}
.pagenation ul li a:hover{
	color: #888;
}
.pagenation ul li:last-child{
	padding-left:1em;
}
html,body,div,span,applet,object,iframe,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}

/* start editing from here */
a{text-decoration:none;transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/
@font-face {
    font-family: 'gandhi_sansregular';
    src: url('../fonts/GandhiSans-Regular-webfont.eot');
    src: url('../fonts/GandhiSans-Regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('../fonts/GandhiSans-Regular-webfont.woff') format('woff'),
         url('../fonts/GandhiSans-Regular-webfont.ttf') format('truetype'),
         url('../fonts/GandhiSans-Regular-webfont.svg#gandhi_sansregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
</style>

</head>
<body>
<center>

<div  style="max-width:80%;">
<div ><h1> NOTES</h1><hr></div><br>


<div class="banner text-center">
	  <div class="container">
			<h1 style="margin-top:-20px;">Share  Your <span class="segment-heading">Institute Notes  </span> With Unotes</h1>
			<p>“Here, class attendance is expected and students are required to take notes, which they are tested on. What is missing, it seems to me, is the use of knowledge, the practical training.” <br>
― Harrison Salisbury</p>
			<div style="margin-top:-10px;"><a href="postnotes.php?institute=<?php echo $institute;?>&branch=<?php echo $_SESSION["branch"];?>">Add Your Notes</a></div>
	  </div>
</div><hr style="
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid blue;
    margin: 1em 0;
    padding: 0; ">

 <div class="body" style="margin-top:50px; ">
        <div class="right-content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3>Latest Collections of Notes</h3>
					</div>
					<div class="right-content-heading-right">

					</div>
					<div class="clear"> </div>
				</div>

				<div class="content-grids">
								 <?php


							foreach($notespdf as $row){
							//fetching all posts

							$course = $row['course'];
							$institute= $_GET['institute'];
							if($course==$row1){
						echo '
						 <div >

		         <div class="content-grid">
						<a href="pdfdownload.php ? file=images/notes/'.$row['ad_pdf'].'" download><img src="images/PDF_icon_Material_design.jpg" title="click to Download" /></a>
						<h2 style="color:black;">'.$row['subject'].'</h2>
						<h3>'.$row['description'].'</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" id="read" href="pdf-flipbook-master/pdfflipbook.php? file=images/notes/'.$row['ad_pdf'].'">Read now</a>
					</div>



                 </div>

						 ';
							}}
				?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="http://pdf-to-flipbook.codingfocus.com/release/jquery.pdfflipbook.1.js"></script>

<script type="text/javascript">
    $('#read').pdfFlipbook();</script>
</script>


					<div class="clear"> </div>
					<!---start-pagenation----->
					<div class="pagenation">
						<ul>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
					<div class="clear"> </div>
					<!---End-pagenation----->
				</div>
			</div>

 </div>
</div>
<br><br>

<p style="color:black;">© 2018 unotes.in AJAY KADOULA</p>
</center>
</body>
</html>



<?php

}else { header("Location:index.php");
}
?>
