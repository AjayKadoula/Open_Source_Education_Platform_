<?php
session_start();
if(isset($_SESSION["user_name"])){
?>
<!doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<title>Congratulation YOU are Successfully Signup</title>
<link rel="stylesheet" href="success.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div >
<div class="head">
<a href="home.php"   style="text-decoration:none;" >
<div class="unotes" >
Unotes.in
</div>
</a>
<div ><a href="logoff.php" class="logoff"><b><strong>Logoff</strong></b></a></div>
</div>
</div>
<center>
<div class="error"><?php
   if(isset($_GET["id"])){
	   echo"<div id='".$_GET["id"]."'>".$_GET["v"]."</div>";
   }
?></div>
<div class="form" >

<h4></h4><br><br>

<h1><b><strong>WELCOME</strong> </b></h1 >
<h2 style="text-transform:capitalize;"><?php echo $_SESSION["user"] ;?> </h2>
<h4 class="h31">Upload Your Profile Picture</h4>
<form  method="post" action="profile_pic.php" enctype="multipart/form-data">
<div class="row">
   <div class="small-12 medium-2 large-2 columns">
     <div class="circle">
       <!-- User Profile Image -->
       <img class="profile-pic"   title="profile-pic" src="profile_image/download.png">

       <!-- Default Image -->
       <!-- <i class="fa fa-user fa-5x"></i> -->
     </div>
     <div  class="p-image">
       <i class="fa fa-camera upload-button" name="image"></i><br>
        <input class="file-upload" name="image" type="file" accept="image/*"/>
     </div>
  </div>
</div>

<div >

  <textarea class="objective" id="text" name="image_text" placeholder="Write Your objective/ Some positive quotes........."></textarea><br>
   <button type="submit" name="submit" class="enter"><span>Enter to website</span>
</form>
      </div>

</div>
</center>
<div>
<div class="footer"><p class="p4">© unotes.in 2018 <p> <p class="name">Developed by AJAY KADOULA</p></div>
</div>
<script src="jquery\jquery-2.2.4.min.js" > </script>
<script src="jquery\profile.js" >
</script>
</body>
</html>
<?php
}else { header("Location:index.php");
}
?>
