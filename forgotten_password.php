
<!doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<title> Forgot password</title>
<style>
.head{
	height:100px;
	background-color:#00b5ff;
	margin-left:-8px;
	margin-right:-8px;
	margin-top:-8px;
	
     }
.unotes{
	  text-decoration:none;
	  font-size:42px;
	  font-family:comic sans ms;
	  color:white;
	 
	  position:relative;
	  margin-left:120px;
	  top:25px;
	  
     }
.footer{
	   font-family:Sans Serif;
	   font-size:20px;
	   color:white;
	   background-color:#00b5ff;
	   margin-left:-8px;
	   margin-right:-8px;
	   margin-bottom:-8px;
	   margin-top:177px;
	   height:40px;
	   border: 1px solid blue;
	  
      }
.name{
	
	float:right;
	
	margin-right:80px;
	margin-top:-20px;
	

}
.p4{
	position:relative;
	margin-left:80px;
	
	margin-top:2px;
	float:left;
	
}
input[type=number] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
	border-radius:33%;
	font-size:22px;
}
input[type=submit] {
    width: 30%;
	border-radius:24%;
	background-color:#00b5ff;
    padding: 12px 20px;
    margin-bottom:10px;
    box-sizing: border-box;
}
.error{
	Font-size:30px;
	color:Red;
}


</style>
</head>
<body >
<div class="head">
<a href="index.php"  style="text-decoration:none;">
<div class="unotes">
Unotes.in
</div></a>
</div><br><br><br><br>
<center style="min-height:300px;"><div class="error"><?php 
   if(isset($_GET["id"])){
	   echo"<div id='".$_GET["id"]."'>".$_GET["V"]."</div>";
   }
?>
</div><br><br><br>
<center style="min-height:300px;">
<div style="width:30%; min-height:200px;    -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;">
<div class="container">
<br>
<h3>Enter the Username of Your Account to Reset New Password</h3>
    <div class="regisFrm">
        <form action="forgot_function.php" method="post">
            <input type="number" name="username" maxlength="10" pattern="^\d{10}$" placeholder="+91" required="">
	
            <div class="send-button"><br>
                <input type="submit" name="forgotSubmit" value="CONTINUE">
            </div>
        </form>
    </div>
</div>
</div>
</center>
<div class="footer"><p class="p4">© unotes.in 2018 <p> <p class="name">Developed by AJAY KADOULA</p></div>


</body>
</html>


