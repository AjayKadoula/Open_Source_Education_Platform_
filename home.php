<?php
session_start();
if(isset($_SESSION["user"])){
include './bar\navigation_bar.php';
include './post.php';
$username= $_SESSION["user_name"];

?>

	
<!doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<title> profile</title>
<link rel="stylesheet" href="home.css" type="text/css">
<link rel="stylesheet" href="css\post.css" type="text/css">
  
	
</head>
<body >
<div style="display:none;">jai MEERA baba jai JANKHA peer</div>
<div >
<center >
<div class="banner text-center" style="width:32%;  border-radius:2%; margin-left:34%; margin-top:-54px; position:absolute;  border: 1px solid blue;   z-index:20;">
	  <div >    
			<h1>Welcome to the <span class="segment-heading"> online knowledge </span> center.</h1>
			<p>“Learning gives creativity
Creativity leads to thinking
Thinking provides knowledge
Knowledge makes you great.” <br>
― A.P.J. Abdul Kalam</p>
			<a href="post-ad.html">Your feedback</a>
	  </div>
</div>
</center>
<div > 

 <div style="
  width:19.5%; z-index:2; opacity:0.9;
 ">
<div class='lef'>
<img src="profile_image/<?php echo $_SESSION["profile_image"] ;   ?>" alt="" class="box-img"></img>
<div class="left_profile">
          <br> <br><div class="nam" style="text-transform:capitalize;"> <?php echo $_SESSION["user"];   ?></div><hr>
						<div class=" share">
							<h5>
								<small style="font-size:15px;">Sharing:</small>
								<a href="#">#</a>
							</h5>
						</div>
						<div class="folllowing" >
							<h5>
								<small style="font-size:15px;">Following:</small>
								<a href="#">#</a>
							</h5>
						</div>
						<div class="followers">
							<h5>
								<small style="font-size:15px;">Followers:</small>
								<a href="#">#</a>
							</h5>
						</div>
</div>
</div><br>

<div class="left1"><center>
<div class="menu " style="color:black;" ><b> Options</b></div><hr >
<div class="lefbutton "><a href="notes.php" >Notes</a></div><br>
<div class="lefbutton spin"><a href="books.php" >Books</a></div><br>
<div class="lefbutton spin"><a href="classroom.php" >Classroom</a></div><br>
<div class="lefbutton spin"><a href="exam.php" >Exams</a></div><br>
<div class="lefbutton spin"><a href="career.php">Career</a></div><br>
<?php /* <div class="lefbutton spin"><a href="groups.php" >Groups</a></div><br> */?>

</center>
</div>
</div>
<div style=" margin-top:-70px; margin-left:1035px;
  width:19.5%; position:fixed; z-index:2;
 ">
<div class='right' ><center>

<div style="font-family:Georgia; " ><b style="font-family:Georgia; text-decoration: underline;">Who to follow- </b>  <a href="viewallfollower.php">view all</a></div>
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

</div><center><br>
<div class="box">
   
   
   
   <div class="wrapper"  >		
		<!--content -->
		<div class="content">
			<!--left-content-->
			<div  >
				<div class="posts" >
					<div class="create-posts">
 					<form action="post1.php" method="post" enctype="multipart/form-data">
						<div class="c-header">
							<div class="c-h-inner" >
								<ul>	
									<li style="border-right:none; color: rgb(59, 89, 152);"><img src="img/1.png"></img>Any query</li>
									<li style="border: none; color: rgb(59, 89, 152);"><img src="img/icon1.png"></img>Any idea/Thoughts</li>
									<li><input type="file"  onchange="readURL(this);" style="display:none;" name="post_image" id="uploadFile"></li>
									<li><img src="img/icon2.png"></img><a href="#" id="uploadTrigger" name="post_image">Add Photos</a></li>
									
								</ul>
							</div>
						</div>
						<div class="c-body" >
							<div class="body-left">
								<div class="imgbox">
									<img src="profile_image/<?php echo $_SESSION["profile_image"] ;  ?>"></img>
									
								</div>
							</div>
							<div class="body-right">
								<textarea class="text-type" name="status" placeholder="What's query in your mind?"></textarea>
							</div>
							<div id="body-bottom">
							<img src="#"   id="preview"/>
							</div>
						</div>
						<div class="c-footer"  >
							<div class="right-box">
								<ul>
									<br>
									<li><input type="submit" name="submit" value="Ask" class="btn2"/></li>
								</ul>
							</div>
								
							</div>
						</div><br>
						</div>
						<script type="text/javascript">
						 //Image Preview Function
								$("#uploadTrigger").click(function(){
								   $("#uploadFile").click();
								});
						        function readURL(input) {
						            if (input.files && input.files[0]) {
						                var reader = new FileReader();

						                reader.onload = function (e) {
											if(avatarok == 1) {
						                	$('#body-bottom').show();
						                    $('#preview').attr('src', e.target.result);
											
						                }}

						                reader.readAsDataURL(input.files[0]);
						            }
						        }
                        $('#uploadTrigger').click(function () {
    var avatar = $("#uploadFile").val();
    var extension = avatar.split('.').pop().toUpperCase();
    if(avatar.length < 1) {
        avatarok = 0;
    }
    else if (extension!="PNG" && extension!="JPG" && extension!="GIF" && extension!="JPEG"){
        avatarok = 0;
        alert("invalid extension "+extension);
    }
    else {
        avatarok = 1;
    }
    if(avatarok == 1) {
        $('.formValidation').addClass("sending");
        $("#form").submit();
    }
    else {
        $('.formValidation').addClass("validationError");
    }
    return false;
});


						</script>
						<?php foreach($post as $row){
							//fetching all posts
							$time_ago = $row['status_time'];
						echo '
						
						<div class="post-show">
									<div class="post-show-inner"><div class="id-img-box" style="margin-left:10px;"><img src="profile_image/'.$row['profile_image'].'"></img></div><br>
										<div class="post-header">
											<div class="post-left-box">
												
												<div class="id-name">
													<ul>
														<li style="text-transform:Capitalize; margin-top:-20px;"><a href="#">'.$row['fname']." ".$row['sname'].'</a></li>
														<li><small>'.$get->timeAgo($time_ago).'</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body" style="display:inline;">
										    <div style="position:relative;  padding:10px; background-color:#f4f5f7;" >
											<p style="font-family: inherit;">'.$row['query'].'</p>
											</div>'.( ($row['status_image'] != '') ? '<div class="post-img">
												<img src="images/posts/'.$row['status_image'].'"></img></div>' : '').'
											<div class="post-footer">
												<div class="post-footer-inner">
													<ul>
														<li><a href="#"> Like</a></li>
														<li ><a href="#" class="comment" > Answer </a></li>
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


<ul class="news_list">

<li class="loadbutton"><button class="loadmore" data-page="2">Load More</button></li>
</ul>
</div>
</center>

</div>

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






</script>





</body>
</html>
<?php	

}else { header("Location:index.php");
}
?>




