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
<title> profile</title>
<link rel="stylesheet" href="css/estilos.css">
<link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
<link href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

<link rel="stylesheet" href="css\notes.css" type="text/css">
<script src="jquery\notes.js" type="text/javascript"></script>
<style>
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

body {
  background-color: #ecf0f1;
position: relative;;}

header {
  display: block;
  overflow: hidden;
  position: relative;
  padding-bottom: 2em;
  -moz-border-radius-topleft: 8px;
  -webkit-border-top-left-radius: 8px;
  border-top-left-radius: 8px;
  -moz-border-radius-topright: 8px;
  -webkit-border-top-right-radius: 8px;
  border-top-right-radius: 8px; }

.container {
  width: 320px;
  margin: auto 1.5em 1.5em auto;
  display: inline-block;
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  -ms-border-radius: 8px;
  -o-border-radius: 8px;
  border-radius: 8px;
  padding-bottom: 1.5em;
  background-color: #dde1e2;
  -webkit-box-shadow: #bdc3c7 0 5px 5px;
  -moz-box-shadow: #bdc3c7 0 5px 5px;
  box-shadow: #bdc3c7 0 5px 5px; }

.bg {
  border-bottom: 8px solid #5cc0ff; }

.bio:hover > .desc {
  cursor: pointer;
  opacity: 1; }

.avatarcontainer {
  position: absolute;
  bottom: 0;
  right: 0;
  left: 0;
  margin: auto;
  width: 100px;
  height: 100px;
  display: block; }
  .avatarcontainer:hover > .hover {
    opacity: 1; }

.avatar {
  width: 100px;
  border: 8px solid #5cc0ff;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  overflow: hidden;
  position: relative; }
  .avatar img {
    width: 100px;
    height: 100px; }
  .avatar:hover + .hover {
    opacity: 1;
    cursor: pointer; }

.hover {
  position: absolute;
  cursor: pointer;
  width: 100%;
  height: 100%;
  background-color: #3498db;
  top: 0;
  font-size: 1.8em;
  text-align: center;
  color: white;
  padding-top: 18%;
  opacity: 0;
  font-family: 'FontAwesome';
  font-weight: 300;
  border: 8px solid #5cc0ff;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -o-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.5s;
  -moz-transition-duration: 0.5s;
  -o-transition-duration: 0.5s;
  transition-duration: 0.5s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease; }

.data {
  margin-top: .6em;
  color: #81878b; }
  .data li {
    width: 32%;
    text-align: center;
    display: inline-block;
    font-size: 1.5em;
    font-family: 'Lato';
    border-right: solid 1px #bdc3c7; }
    .data li:last-child {
      border: none; }
    .data li span {
      display: block;
      text-transform: uppercase;
      font-family: 'Quicksand';
      font-size: .5em;
      margin-top: .6em;
      font-weight:700;
    }

.desc {
  position: absolute;
  top: 0;
  background-color: rgba(0, 0, 0, 0.6);
  width: 100%;
  height: 171px;
  padding: 1.2em 1em 0 1em;
  color: white;
  text-align: center;
  opacity: 0;
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -o-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-in;
  -moz-transition-timing-function: ease-in;
  -o-transition-timing-function: ease-in;
  transition-timing-function: ease-in; }
  .desc h3 {
    font-family: "Lato";
    font-size: 1.2em;
    margin-bottom: .5em; }
  .desc p {
    font-size: .9em;
    font-family: 'Quicksand';
    line-height: 1.5em; }

.follow {
  margin: 1.5em auto 0 auto;
  background-color: #2589cc;
  width: 150px;
  color: white;
  font-family: "Lato";
  text-align: center;
  padding: .5em;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -o-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease; }
  .follow {

  		border-radius: 40px;
      border: 2px solid lightblue;
  		letter-spacing: 1px;
  		font:  'Oswald', Arial, sans-serif;
  }

  .follow:hover {
     	background-image: linear-gradient(to right, #00b5ff 0%, lightblue 100%);
      background-color:#00b5ff;
      width:102%;
      color: white;
  }
    .loadmore {
    color: #FFF;
    border-radius: 5px;
    width: 50%;
    height: 50px;
    font-size: 20px;
    background:#00b5ff;
    outline: 0;
     opacity: 0.8;
     filter: alpha(opacity=50);
     position:relative;
     float:bottom;
     border: 1px solid blue;
    }
     .loadbutton{
    	 float:bottom;
        text-align: center;
    }
</style>
</head>
<body>
  <center >
    <div style="Width:80%;  height :100%; margin-top:-50px ; background-color:white;">
      <br>  <br>  <br>

<?php 	foreach($followerlistall as $row3){
  //fetching all posts
  $id2 = $row3['user_id'];

  echo	'<div class="container">
		<header>
			<div class="bio">
        <img src="https://picsum.photos/300/200" alt="background" class="bg">';
			echo '	<div class="desc">
					<h3>@'.$row3['fname'].'  '.$row3['sname'].'</h3>
					<p>'.$row3['image_text'].'</p>
				</div>
			</div>

			<div class="avatarcontainer">
				<img src="profile_image/'.$row3['profile_image'].'" width="100px" height="100px"  class="avatar">
			</div>


		</header>

		<div class="content">

      <a href="userprofile.php? username='.$row3['user_name'].'"><h1 class="title">'.$row3['fname'].'  '.$row3['sname'].'</h1></a>
      <div><h3>'.$row3['user_gender'].' '.$row3['user_dob'].'</h3></div>
			<div class="data">
				<ul>
					<li>
						2,934
						<span>Posts</span>
					</li>
					<li>
						1,119
						<span>Followers</span>
					</li>
					<li>
						530
						<span>Following</span>
					</li>
				</ul>
			</div>

    <button   data-page="2" rel="'.$row3['user_id'].'" class="follow">Follow</a>
		</div>

	</div>

';
}?>

<ul class="news_list">

<li class="loadbutton"><button class="loadmore" data-page="2">Load More</button></li>
</ul>
</div>

</center>





<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">

$(document).on('click','.loadmore',function () {
  $(this).text('Loading...');
    var ele = $(this).parent('li');
        $.ajax({
      url: 'loadmore.php',
      type: 'POST',
      data: {
              page:$(this).data('page'),
            },
      success: function(response){
           if(response){
             ele.hide();
                $(".news_list").append(response);
              }
            }
   });
});

$(document).on('click','.follow',function () {
  $(this).css('background-color','#34CF7A');
  $(this).html('<div class="icon-ok"></div> Following');
	  var follow_id = $(this).attr("rel");
    var ele = $(this).parent('.adprice');
        $.ajax({
      url: 'follow.php',
      type: 'POST',
      data: {
              page:$(this).data('page'),follow_id:follow_id,
            },
      success: function(response){
           if(response){
             ele.hide();
                $(".list").append(response);
              }
            }
   });
});








</script>
</body>
</html>



<?php

}else { header("Location:index.php");
}
?>
