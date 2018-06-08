<?php
session_start(); 
include('db.php');
  $username1=$_SESSION['user_name1'];
  	include 'core/main.php';
	$check  = new Main;
	$get    = new Main;
	$send   = new Main;
   @$user_id = $_SESSION['user_name'];
 ?>
<?php
    if(isset($_POST['page'])):
    $paged=$_POST['page'];
    $sql="SELECT * FROM `posts`, `users` WHERE  user_name=user_id_p AND user_id_p = '$username1'  ORDER BY `post_id` DESC";
	
    if($paged>0){
           $page_limit=$resultsPerPage*($paged-1);
           $pagination_sql=" LIMIT  $page_limit, $resultsPerPage";
           }
    else{
    $pagination_sql=" LIMIT 0 , $resultsPerPage";
    }
	$connectionStatu = connect_db();
    $result=mysqli_query($connectionStatu,$sql.$pagination_sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows>0){
    while($row=mysqli_fetch_array($result)){
 
	$time_ago = $row['status_time'];
    echo '<li style="margin-left:-15px;">	<div class="post-show">
									<div class="post-show-inner"><div class="id-img-box"><img src="profile_image/'.$row['profile_image'].'"></img></div><br>
										<div class="post-header">
											<div class="post-left-box">
												
												<div class="id-name">
													<ul>
														<li><a href="#">'.$row['fname']." ".$row['sname'].'</a></li>
														<li><small>'.$get->timeAgo($time_ago).'</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body">
											<div class="post-header-text">
	                                        '.substr($row['query'],0,500).'
											</div>'.( ($row['status_image'] != 'NULL') ? '<div class="post-img">
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
								</div><br>';
    }
    }
    if($num_rows == $resultsPerPage){?>
    <li class="loadbutton"><button class="loadmore" data-page="<?php echo  $paged+1 ;?>">Load More</button></li>
 <?php
  }else{
    echo "<li>No More Feeds</li>";
 }
 endif;
 ?>