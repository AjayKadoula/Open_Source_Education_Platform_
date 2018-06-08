<?php
session_start();
if(isset($_SESSION["user"]))
{
  include './bar\navigation_bar.php';
  
if(isset($_GET["id"])){
	
         
       $id=$_GET["id"];
	   include "db.php";
        $connectionStatu = connect_db();
		$status= single($connectionStatu,$id);
        if(is_array($status)){
			 $row["category"] = $status["category"];
			 $row["title"] = $status["title"];
			 $row["price"] = $status["price"];
			 $row["description"] = $status["description"];
			 $row["ad_image"] = $status["ad_image"];
			  $row["city"] = $status["city"];
			  $row["name"] = $status["name"];
			    $row["mobile"] = $status["mobile"];
				 $row["email"] = $status["email"];
				 $row["time"] = $status["time"];
				 
    }  
}


?>


<!DOCTYPE html>
<html>
<head>
<title>single</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">

<style>

body{
	
	background-image: url("https://st2.depositphotos.com/1280399/6228/i/950/depositphotos_62289735-stock-photo-white-background-smooth-metal-texture.jpg");
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
    background-color:#54f0b1;
    padding: 10px 20px;
}
.banner a:hover {
	background:blue;
}
.single-page {
	padding:50px 0;
}
.product-view {
    padding: 15px;
    border: 1px solid #eee;
}
.product-view h2 {
    font-size: 28px;
    color: #000;
    line-height: 1.3;
}
.product-view p {
    font-size: 13px;
    color: #929292;
	margin:15px 0;
	word-spacing:3px;
}
.product-view p i {
    margin-right: 4px;
    color: blue;
    font-size: 14px;
}
.product-view p a {
    margin-right: 4px;
    color: blue;
    font-size: 14px;
}
.product-desc {
    margin-top: 45px;
}
.product-details h4 {
	color:#000;
	font-size:18px;
	margin:15px 0;
}
.product-details h4 a {
	color:blue;
	font-size:15.5px;
	text-decoration:none;
}
.product-details p {
    line-height: 1.8;
    color: #848484;
    font-size: 13px;
    margin: 8px 0;
}
.product-details p strong {
    font-weight: 400;
    color: #000;
    font-family: 'Ubuntu Condensed', sans-serif;
    font-size: 17px;
}
.item-price {
	border: 3px solid rgba(1, 161, 133, 0.36);
    margin-left: 15%;
    padding:0 15px;
	position:relative;
}
.item-price:before {
	    content: '';
    position: absolute;
    z-index: 1;
    left: -50.5%;
    background-color: rgba(0,0,0,0);
    border: 105px solid rgba(0,0,0,0);
    border-right-color: rgba(1, 161, 133, 0.36);
    height: 0;
    width: 0;
    top: -3px;
    border-right-width: 80px;
}
p.p-price {
    float: left;
    width: 50%;
    margin: 0;
    font-size: 16px;
    font-weight: 400;
    color: #424242;
    vertical-align: middle;
	margin-top:8px;
	margin-left: 20px;
}
h3.rate {
    float: left;
    color: #54f0b1;
    font-size: 30px;
}
.condition h4,.itemtype h4 {
    margin: 0;
    floaT: left;
    font-size: 22px;
}
.condition p,.itemtype p {
    margin: 0;
	margin-left: 20px;
}
.product-price {
    padding: 20px 0;
}
.condition {
    padding: 20px 0;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
}
.itemtype {
    padding: 20px 0;
}
.interested {
    margin: 20px;
    padding: 40px 20px;
    background: rgba(1, 161, 133, 0.36);
    margin-left: 15%;
    margin-right: 0;
}
.interested  h4 {
	color:#000;
	font-size:19px;
}
.interested  p {
	color:#000;
	font-size:14px;
	margin:30px 0 0 0;
}
.interested p i {
    margin-right: 12px;
    color: #FFFFFF;
    font-size: 14px;
    background: rgba(0, 0, 0, 0.38);
    padding: 7px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    vertical-align: middle;
}
.tips {
    margin: 20px;
    padding: 40px 20px 15px;
    background: rgba(1, 161, 133, 0.36);
    margin-left: 15%;
    margin-right: 0;
}
.tips h4 {
    color: #000;
    font-size: 19px;
    margin-bottom: 15px;
}
.tips ol li a {
    display: block;
    text-decoration: none;
    color: #333333;
    margin: 5px 0;
    font-size: 13px;
    line-height: 30px;
}

</style>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>

		<link rel="stylesheet" href="css/flexslider.css" media="screen" />
</head>
<body>

	<div class="banner text-center">
	  <div class="container">    
			<h1>Sell or Advertise   <span class="segment-heading">    anything online </span> with UNOTES</h1>
			<p>**************************</p>
			<a href="books.php"> Go to books</a>
	  </div>
	</div>
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
			<ol class="breadcrumb" style="margin-bottom: 5px;">
				<li><a href="index.html">Home</a></li>
				<li><a href="all-classifieds.html">All Ads</a></li>
				<li class="active"><a href="books.html">Books</a></li>
				<li class="active"><?php echo $row["category"] ;   ?></li>
			</ol>
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<p> <i class="glyphicon glyphicon-map-marker"></i><a href="#">state</a>, <a href="#">city:</a><?php echo $row["city"] ;   ?>| Added at <?php echo $row["time"] ;   ?>second , Ad mobile: <?php echo $row["mobile"] ;   ?></p>
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/ad_post/<?php echo $row['ad_image'];?>" >
								<img src="images/ad_post/<?php echo $row['ad_image'];?>" />
							</li>
							<li data-thumb="images/ad_post/<?php echo $row['ad_image'];?>" >
								<img src="images/ad_post/<?php echo $row['ad_image'];?>"  />
							</li>
							<li data-thumb="images/ad_post/<?php echo $row['ad_image'];?>" >
								<img src="images/ad_post/<?php echo $row['ad_image'];?>"  />
							</li>
						</ul>
					</div>
					<!-- FlexSlider -->
					  <script defer src="js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

						<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
					<!-- //FlexSlider -->
					<div class="product-details">
					    <h1>Title :<?php echo $row["title"] ;   ?> </h1><br>
						<h4>Seller Name :<?php echo $row["name"] ;   ?> </h4>
						
						<p><strong>Summary</strong> :<?php echo $row["description"] ;   ?>.</p>
					
					</div>
				</div>
						
				<div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price">Price</p>
							<h3 class="rate">Rs <?php echo $row["price"] ;   ?></h3>
							<div class="clearfix"></div>
						</div>
						<div class="condition">
							<p class="p-price">Condition</p>
							<h4>Good</h4>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price">Item Type</p>
							<h4><?php echo $row["category"] ;   ?></h4>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="interested text-center">
						<h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
						<p><i class="glyphicon glyphicon-earphone"></i><a href="tel: <?php echo $row["mobile"] ;   ?>"><?php echo $row["mobile"] ;   ?></p></a>
						<a href="mailto:<?php echo $row["email"] ;   ?>?Subject=Hey dear,%20 I %20 am %20 Interested %20 in %20 your %20 ad" target="_top"><?php echo $row["email"] ;   ?></a>
						<br><p class="glyphicon glyphicon-earphone"></i><a href="whatsapp://send<?php echo $row["mobile"] ;   ?>?text=Hello%20dear!">Whatsapp</a></p>
					</div>
						
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//single-page-->
	
</body>
</html>

<?php	

}else { header("Location:index.php");
}
?>