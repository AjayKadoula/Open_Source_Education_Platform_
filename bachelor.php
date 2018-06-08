
<?php
session_start();
if(isset($_SESSION["user"])){
include 'bar\navigation_bar.php';
include 'post2.php';
	
         
     
	   $_SESSION["branch"] = $_GET["branch"];
	     $row1=$_SESSION["branch"];
       



 
?>
	
<!doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<title> Books</title>




	
	<style>
.dropbtn {
	height:100px;
	width:500px;
    background-color:white;
    color: #528ff2;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	 box-shadow:0 5px 15px rgba(0,0,0,0.3);
	 opacity:0.8;
}

.dropbtn:focus{
	 background-color:#528ff2;
	 opacity:0.3;
	color:white;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
	
    display: none;
    position: absolute;
    background-color: white;
    width: 500px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	opacity:0.9;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}



.dropdown-content a:hover {background-color: #f1f1f1; }

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #00b5ff;
	color:white;
}


.show {display:block;}
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
<body>
<center>
<div  style="max-width:80%;">
<div ><h1> INSTITUTES</h1><hr></div><br>

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
			<h1 style="margin-top:-20px;">Share  Your <span class="segment-heading">Institute Notes  </span> With Unotes</h1>
			<p>“Here, class attendance is expected and students are required to take notes, which they are tested on. What is missing, it seems to me, is the use of knowledge, the practical training.” <br>
― Harrison Salisbury</p>
			<div style="margin-top:-10px;"><a href="postinstitute.php ? branch=<?php echo $row1;?>">Add Your Institutes</a></div>
	  </div>
</div><hr style="
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid blue;
    margin: 1em 0;
    padding: 0; ">
<div style=" border: 1px solid blue;">
     <?php
	 
							
							foreach($bachelor as $row){
							//fetching all posts
							
							$course = $row['course'];
							$institute = $row['name'];
							if($course==$row1){
						echo '
						 <div id="form" >
             <hr>
		  
		  
		  <form action="'.$row['url'].'">
		  <div class="dropdown">
           <button  class="dropbtn"><h3>'.$row['name'].'</button></h3></form>
           <div  class="dropdown-content">
            <a href="notespdf.php?institute='.$institute.'& branch='.$course.'_first_year_'.$institute.'">First Year</a>
             <a href="notespdf.php?institute='.$institute.'& branch='.$course.'_second_year_'.$institute.'">Second Year</a>
            <a href="notespdf.php?institute='.$institute.'& branch='.$course.'_third_year_'.$institute.'">Third Year</a>
			
            <a href="notespdf.php?institute='.$institute.'& branch='.$course.'_fourth_year_'.$institute.'">Fourth Year</a>
            </div>
             </div>
			 
						 <hr>';	
							}}
				?>
			
</div>
</div>

</center><br><br>

</body>
</html>



<?php	

}else { header("Location:index.php");
}
?>