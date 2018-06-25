
<?php
session_start();
if(isset($_SESSION["user_name"])){
include './bar\navigation_bar.php';
include './post.php';
?>

<!doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<title> Books</title>

<link rel="stylesheet" href="css\books.css" type="text/css">

    <script src="jquery\.js" type="text/javascript"></script>
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
	background:#528ff2;
}
.ads-display.col-md-9 {
    padding-left: 40px;
}
.ads-display.col-md-9 {
		padding: 0;
		margin-top: 30px;
	}

.wrapper {
  padding: 15px 0;
}

.bs-example-tabs .nav-tabs {
  margin-bottom: 15px;
}

@media (max-width: 479px) {
  #narrow-browser-alert {
    display: none;
  }
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #555;
    cursor: default;
    background-color: #fff;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
    position: relative;
    z-index: 1;
    margin-bottom: -1px!important;
    border-top: 1px solid;
    border: 1px solid #CCCCCC !important;
    border-top: 4px solid blue !important;
    border-bottom: 1px #FFF solid !important;
    background-color: #fff!important;
	margin: 0;
}
.nav-tabs>li>a:hover {
    border-color: transparent;
    background-color: transparent;
}
.ads-display.col-md-9 {
    padding-left: 40px;
}
div#myTabContent {
    border: 1px solid blue !important;
    padding: 15px;
	    position: relative;
}
.nav-tabs>li>a {
    line-height: 1.42857143;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    -moz-border-radius: 4px 4px 0 0;
    -ms-border-radius: 4px 4px 0 0;
    -o-border-radius: 4px 4px 0 0;
    font-weight: 400;
    font-size: 17px;
    display: inline-block;
    padding: 13px 15px;
    list-style: none;
    cursor: pointer;
    float: left;
    font-family: 'Ubuntu Condensed', sans-serif;
}
.nav-tabs>li>a>span {
	color:#528ff2;
}
.nav-tabs>li {
    cursor: pointer;
    border: 1px solid blue;
    border-color: rgb(245, 245, 245)!important;
        border-left: none;
    background-color: rgb(249, 249, 249)!important;
}
.bs-example-tabs .nav-tabs {
    margin-bottom: 0;
    border-bottom: none;
}
/* LIST VIEW */
#container .list{
    width: 100%;
}
#container .list li {
    background: #F9F9F9;
    margin-bottom: 30px;
    padding: 20px;
    list-style-type: none;
	    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
	box-shadow: 0 0 0.6em #ccc;
    -webkit-box-shadow: 0 0 0.6em #ccc;
    -o-box-shadow: 0 0 0.6em #ccc;
    -moz-box-shadow: 0 0 0.6em #ccc;
    -ms-box-shadow: 0 0 0.6em #ccc;
}
#container .list li:hover {
	background:#fff;
    transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
#container .list li img{
	float: left;
    margin-right: 0;
    padding-bottom: 0;
    border: 1px solid #D1E0EE;
    padding: 0;
    width: 20%;
    background-color: #fff;
}
#container ul.list li.alt{ background:gray; }
#container .list li p {
    overflow: hidden;
    word-wrap: break-word;
    color: #C1C1C1;
    font-size: 13px;
    margin-top: 15px;
}
#container .list li .title{
	overflow: hidden;
    word-wrap: break-word;
    font-size: 20px;
    text-decoration: none;
    color: #000000;
    font-weight: 500;
    letter-spacing: 1px;
}
#container .list li .adprice{
	display:block;
	font-size:22px;
	display: block;
    font-size: 22px;
    color: #ACD3F7;
    margin: 5px 0 0 0;
}
span.adprice {
    display: block;
    font-size: 22px;
    color: rgba(1, 161, 133, 0.57);
    margin: 5px 0 0 0;
}
#container .list li .list-left {
    width: 60%;
    margin-left: 3%;
    float: left;
}
#container .list li .list-right{
    width: 15%;
    float: right;
    text-align: right;
}
#container .list li .date{
	float: right;
    font-size: 14px;
    display: block;
    width: 100%;
    margin: 15px 0 5px 0;
    color: #404040;
    font-weight: 400;
}
#container .list li .cityname{
	display:block;
	color: #404040;
}
span.cityname{
	display:block;
	color: #404040;
}
#container .list li .adprice {
    display: block;
    font-size: 22px;
    color: rgba(1, 161, 133, 0.57);
    margin: 10px 0 0 0;
}
#container .list li .list-right.title {
    overflow: hidden;
    word-wrap: break-word;
    font-size: 17px;
    text-decoration: none;
    color: blue;
    font-weight: 700;
}

/* GRID VIEW */
#container .grid li {
    float: left;
    width: 29.333%;
    box-shadow: 0 0 0.6em #ccc;
    -webkit-box-shadow: 0 0 0.3em #E4E4E4;
    -o-box-shadow: 0 0 0.3em #E4E4E4;
    -moz-box-shadow: 0 0 0.3em #E4E4E4;
    -ms-box-shadow: 0 0 0.3em #E4E4E4;
    margin: 2%;
    background: #F7F7F7;
    list-style-type: none;
}
#container .grid li img{text-align:center;width:100%;}
#container .grid li p{display:none;}
#container .grid li .list-left{text-align:left;font-size:24px;margin-left: 10px;margin-top:10px;}
#container .grid li .icon-group-btn{font-size:14px;}
#container .grid li .list-right{    display: block;
    margin-left: 10px;
    padding-bottom: 13px;}
#container .grid li .list-right .date{font-size: 14px;
    display: block;
    width: 100%;
    margin: 15px 0 5px 0;
    color: #404040;
    font-weight: 400;}
#container .grid{
width: 100%;
}
h5.title {
    overflow: hidden;
    word-wrap: break-word;
    font-size: 20px;
    text-decoration: none;
    color: #000000;
    font-weight: 500;
    letter-spacing: 1px;
}

/* SWITCH CONTROLS */
.view-controls-list{
    width: 20%;
    text-align: left;
    margin-bottom: 15px;
    float: left;
}
.view-controls-grid{
	width: 20%;
    text-align: left;
    margin-bottom: 15px;
    float: left;
}
div#viewcontrols label {
    font-size: 14px;
    color: #9A9A9A;
    font-weight: 400;
}
#viewcontrols a{
	padding:5px;
	color:black;
	cursor:pointer;
}
#viewcontrols a:hover{
	color:blue;
}
#viewcontrols .active{
	color:blue;
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
<!-- for-mobile-apps -->

<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
    <script src="js/tabs.js"></script>

<script type="text/javascript">
$(document).ready(function () {
var elem=$('#container ul');
	$('#viewcontrols a').on('click',function(e) {
		if ($(this).hasClass('gridview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('list').addClass('grid');
				$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
				$('#viewcontrols .gridview').addClass('active');
				$('#viewcontrols .listview').removeClass('active');
				elem.fadeIn(1000);
			});
		}
		else if($(this).hasClass('listview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('grid').addClass('list');
				$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
				$('#viewcontrols .gridview').removeClass('active');
				$('#viewcontrols .listview').addClass('active');
				elem.fadeIn(1000);
			});
		}
	});
});
</script>
</head>
<body>
<center>
<div class="body">
<h1>Books</h1>
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
			<h1>Sell or Advertise   <span class="segment-heading">    books online </span> with Unotes</h1>
			<p>“Books serve to show a man that those original thoughts of his aren’t very new after all.” <br>
― Abraham Lincoln</p>
			<div style="margin-top:-10px;"><a href="post-ad.php">Post Free Ad</a></div>
	  </div>
</div><hr style="
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid blue;
    margin: 1em 0;
    padding: 0; ">
<div>
<div style="margin-left:180px;">
      <div class="ads-display col-md-9">
					<div class="wrapper">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						<li role="presentation" class="active">
						  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
							<span class="text">All Ads with Photos</span>
						  </a>
						</li>

					  </ul>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
												<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select>
														<option value="">Most recent</option>
														<option value="">Price: Rs Low to High</option>
														<option value="">Price: Rs High to Low</option>
										</select>
									   </div>
									 </div>
								<div class="clearfix"></div>
							<ul class="list">


									<?php

							foreach($adpost as $row){
							//fetching all posts
							$time_ago = $row['time'];
							$id = $row['id'];
						echo '
						<a href="singlefunction.php? id='.$id.'">
									<li>
									<img src="images/ad_post/'.$row['ad_image'].'" title="" alt="" />
									<section class="list-left">
									<h5 class="title">'.$row['title'].'</h5>
									<span class="adprice">RS'.". ".$row['price'].'</span>
									<p class="catpath">'.$row['category'].'</p>
									</section>
									<section class="list-right">
									<span class="date">'.$get->timeAgo($time_ago).'</span>
									<span class="cityname">City name<br>'." ".$row['city'].'</span>
									</section>
									<div class="clearfix"></div>
									</li>
								</a>
						<br> ';
					}
				?>
									<div class="clearfix"></div>
									</li>
								<div class="clearfix"></div>
								</a>
							</ul>
						</div>
							</div>
						</div>


						<ul class="pagination pagination-sm">
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>
							<li><a href="#">8</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					  </div><hr style="
                             display: block;
                             height: 1px;
                             border: 0;
                             border-top: 1px solid blue;
                             margin: 1em 0;
                             padding: 0; ">

                 <div>
                 <p style="color:black;">© 2018 unotes.in AJAY KADOULA</p>
                 </div>
					</div>
				</div>
			</div>

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
