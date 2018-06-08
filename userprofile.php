
<?php
session_start();
if(isset($_SESSION["user"])){
include 'bar\navigation_bar.php';

$username1=$_GET["username"];
include './post3.php';

 
?>
	
<!doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<title> $username1</title>
<link rel="stylesheet" href="home.css" type="text/css">
<link rel="stylesheet" href="css\post.css" type="text/css">
  
	
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin-bottom: 100px;
}

h1 {
  display: block;
  font-size: 50px;
  margin: 25px auto 0;
  width: 975px;
}

h1>small {
  color: #aaaaaa;
  font-size: .5em;
}

header {
  box-shadow: 1px 1px 4px rgba(0,0,0,0.5);
  margin:   25px auto 50px;
  height:   300px;
  position: relative;
  width:    92.8%;
}

figure.profile-banner {
  left:     0;
  right:0 ;
  height:100%;
  overflow: hidden;
  position: absolute;
  top:      0;
  z-index:  1;
}
figure.profile-banner img{
width:100%;
}

figure.profile-picture {
  background-position: center center;
  background-size: cover;
  border: 5px #efefef solid;
  border-radius: 50%;
  bottom: -50px;
  box-shadow: inset 1px 1px 3px rgba(0,0,0,0.2), 1px 1px 4px rgba(0,0,0,0.3);
  height: 148px;
  left: 150px;
  position: absolute;
  width: 148px;
  z-index: 3;
}

div.profile-stats {
  bottom: 0;
  border-top: 1px solid rgba(0,0,0,0.5);
  left: 0;
  padding: 15px 15px 15px 350px;
  position: absolute;
  right: 0;
  z-index: 2;
  
  /* Generated Gradient */
  background: -moz-linear-gradient(top,  rgba(255,255,255,0.5) 0%, rgba(0,0,0,0.51) 3%, rgba(0,0,0,0.75) 61%, rgba(0,0,0,0.5) 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0.5)), color-stop(3%,rgba(0,0,0,0.51)), color-stop(61%,rgba(0,0,0,0.75)), color-stop(100%,rgba(0,0,0,0.5)));
  background: -webkit-linear-gradient(top,  rgba(255,255,255,0.5) 0%,rgba(0,0,0,0.51) 3%,rgba(0,0,0,0.75) 61%,rgba(0,0,0,0.5) 100%);
 background: -o-linear-gradient(top,  rgba(255,255,255,0.5) 0%,rgba(0,0,0,0.51) 3%,rgba(0,0,0,0.75) 61%,rgba(0,0,0,0.5) 100%);
  background: -ms-linear-gradient(top,  rgba(255,255,255,0.5) 0%,rgba(0,0,0,0.51) 3%,rgba(0,0,0,0.75) 61%,rgba(0,0,0,0.5) 100%);
  background: linear-gradient(to bottom,  rgba(255,255,255,0.5) 0%,rgba(0,0,0,0.51) 3%,rgba(0,0,0,0.75) 61%,rgba(0,0,0,0.5) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#80ffffff', endColorstr='#80000000',GradientType=0 );

}

div.profile-stats ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

div.profile-stats ul li {
  color: #efefef;
  display: block;
  float: left;
  font-size: 24px;
  font-weight: bold;
  margin-right: 50px;
  text-shadow: 1px 1px 2px rgba(0,0,0,0.7)
}

div.profile-stats li span {
  display: block;
  font-size: 16px;
  font-weight: normal;
}

div.profile-stats a.follow {
  display: block;
  float: right;color: #ffffff;
  margin-top: 5px;
  text-decoration: none;
  
  /* This is a copy and paste from Bootstrap */
  background-color: #49afcd;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #49afcd;
  background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
  background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: linear-gradient(to bottom, #5bc0de, #2f96b4);
  background-repeat: repeat-x;
  border-color: #2f96b4 #2f96b4 #1f6377;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  display: inline-block;
  padding: 4px 12px;
  margin-bottom: 0;
  font-size: 14px;
  line-height: 20px;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  border-radius: 4px;
}

div.profile-stats a.follow.followed {
  
  /* Once again copied from Boostrap */
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #5bb75b;
  background-image: -moz-linear-gradient(top, #62c462, #51a351);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#51a351));
  background-image: -webkit-linear-gradient(top, #62c462, #51a351);
  background-image: -o-linear-gradient(top, #62c462, #51a351);
  background-image: linear-gradient(to bottom, #62c462, #51a351);
  background-repeat: repeat-x;
  border-color: #51a351 #51a351 #387038;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff51a351', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

header>h1 {
  bottom: -50px;
  color: #354B63;
  font-size: 40px;
  left: 350px;
  position: absolute;
  z-index: 5;
}
hr{
	width:92.8%;
    display: block;
    height: 2px;
    border: 0;
    border-top: 1px solid #d2dbda;
    margin: 1em 0;
padding: 0;}
}
</style>

</head>
<body >

		<?php
							
							foreach($userprofile as $row){
							//fetching all posts
							
						echo '
<center>
<div style="width:80%; margin-top:-104px;">
   <header>
  <figure class="profile-banner">
    <img src="https://unsplash.it/975/300" alt="Profile banner" />
  </figure>
  <figure class="profile-picture" 
    style="background-image: url(profile_image/'.$row['profile_image'].')">
  </figure>
  <div class="profile-stats">
    <ul class="ul">
      <li># <span>Sharing</span></li>
      <li>#    <span>Following</span></li>
      <li>#   <span>Followers</span></li>
	  <a href="about.php"><li>#   <span>About</span></li></a>
    </ul>
    <a href="javascript:void(0);" class="follow">
      Follow '.$row['fname'].'
    </a>
  </div>
  <h1 style="text-transform:capitalize;">'.$row['fname'].' <small>'.$row['sname'].'</small></h1>
</header>
<hr>

</div>
</center>
								
						<br> ';	
					}	
				?>
<div > 

 <div style="
  width:19.5%; z-index:2; opacity:0.9; margin-top:-0px;
 ">


<div class="left1" style="margin-top:0px;" ><center>
<div class="menu " style="color:black;" ><b> Options</b></div><hr >
<div class="lefbutton "><a href="notes.php" >Notes</a></div><br>
<div class="lefbutton spin"><a href="books.php" >Books</a></div><br>
<div class="lefbutton spin"><a href="classroom.php" >Classroom</a></div><br>
<div class="lefbutton spin"><a href="exam.php" >Exams</a></div><br>
<div class="lefbutton spin"><a href="career.php">Career Option</a></div><br>
<div class="lefbutton spin"><a href="#" >Training And Development</a></div><br>

</center>
</div>
</div>
<div style=" margin-top:8px; margin-left:1035px;
  width:19.5%; position:relative; z-index:2 ; 
 ">
<div class='right' ><center>

<div style="font-family:Georgia;  " ><b style="font-family:Georgia; text-decoration: underline;">Who to follow- </b>  <a href="#">view all</a></div>
       </center><br> <ul class="list">		
		<?php
							
							foreach($followerlist as $row2){
							//fetching all posts
							
							$id2 = $row2['user_id'];
						echo '
						
									<li>
									<img src="profile_image/'.$row2['profile_image'].'" title="" alt="" />
									<section class="list-left">
				<a href="userprofile.php? username='.$row2['user_name'].'"><h5 class="title">'.$row2['fname'].'  '.$row2['sname'].'</h5></a>
									<p class="catpath">'.$row2['user_gender'].'</p>
									<span class="cityname">'.$row2['user_dob'].' </span>
									<span class="adprice"><a href="#">Follow</a></span>
									
									</section>
									<section class="list-right">
									
									</section>
									<div class="clearfix"></div>
									</li> 
								
						<br> ';	
					}	
				?>
				</ul>
</div>
<br>
<hr>
<div style="border:line; color:black;" ><center><p>© 2018 M&J(Unotes.in) <a href="#">Terms </a><a href="#">Policy </a><a href="#">About us </a><br><b>Developed by Ajay Kadoula<a href="http://www.uietkuk.org/">(Uiet)</a></b></p></center></div>
<div ><hr style="color:black;"></div>
</div>

</div><center style="margin-top:-755px;"><br>
<div class="box" >
   
   
   
   <div class="wrapper"  >		
		<!--content -->
		<div class="content">
			<!--left-content-->
			<div style="margin-top:120px;" ><br>
				
					
						<?php foreach($userpost as $row){
							//fetching all posts
							$time_ago = $row['status_time'];
						echo '
						
						<div class="post-show">
									<div class="post-show-inner"><div class="id-img-box"><img src="profile_image/'.$row['profile_image'].'"></img></div><br>
										<div class="post-header">
											<div class="post-left-box">
												
												<div class="id-name">
													<ul>
														<li style="text-transform:Capitalize;"><a href="#">'.$row['fname']." ".$row['sname'].'</a></li>
														<li><small>'.$get->timeAgo($time_ago).'</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body">
											<div >
												'.$row['query'].'
											</div>'.( ($row['status_image'] != '') ? '<div class="post-img">
												<img src="images/posts/'.$row['status_image'].'"></img></div>' : '').'
											<div class="post-footer">
												<div class="post-footer-inner">
													<ul>
														<li><a href="#"> Like</a></li>
														<li><a href="comment.php">Comment</a></li>
														<li><a href="#">Share</a></li>
													</ul>	
												</div>
											</div>
										</div>
									</div>
								</div><br> ';	
					}	
				?>
					</div>
					</form>	
													
			</div>

 

</div>


<ul class="news_list" style="margin-top:45%;">

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
      url: 'loadmore1.php',
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




</script>





<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script  type="text/javascript">
// This just toggles the follow/following of the button
$('a.follow').click(function () {
  $(this).toggleClass('followed');
  
  if($(this).hasClass('followed')) {
    $(this).text('Followed');
    $('.ul li:last-child').html('#+1<span>Followers</span>');
  }
  else {
    $(this).text('Follow ');
    $('.ul li:last-child').html('#<span>Followers</span>');
  }
});
    
</script>

</body>
</html>



<?php	

}else { header("Location:index.php");
}
?>