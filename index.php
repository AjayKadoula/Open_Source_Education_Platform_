<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>unotes.in </title>
<link rel="icon" href="img/icon.jpg" type="image/jpg" sizes="16x16">
<link rel="stylesheet" href="homepage.css" type="text/css">
<link rel="stylesheet" href="css\popup.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript"
    src="http://ajax.microsoft.com/ajax/jquery.ui/1.8.5/jquery-ui.min.js">
</script>
<script src="jquery\home.js">


</script>
<script src="jquery\popup.js">

</script>

</head>
<body>
<div style="display:none;">jai MEERA baba jai JANKHA peer</div>
<div>
<div class="error"><?php
   if(isset($_GET["id"])){
	   echo"<div id='".$_GET["id"]."'>".$_GET["v"]."</div>";
   }
?>
</div>


<div class="errorr"><?php
   if(isset($_GET["class"])){
	   echo"<div class='".$_GET["class"]."' >".$_GET["e"]."</div>";
   }
?>
</div>

<div class="head">
<a href="index.php"  style="text-decoration:none;">
<div class="unotes">
Unotes.in
</div></a>
<div>
<form class="login" entype="multipart/form-data" method="post" action="auth.php">
<table>
<tr>
<td>Username</td>
<td>Password</td>
</tr>
<tr>
<td><input type="text" name="username"  maxlength="10"  placeholder="+91" style="height:25px;" pattern="^\d{10}$"> </td>
<td><input type="password" name="password"  minlength="4" style="height:25px;" > </td>
<td><input type="submit" name="submit" value="Log In"> </td>
</tr>
<td><div style="margin-top:-10px; margin-left:10px;"><a href="forgotten_password.php" class="forgot">forgotten Password ?</a></div></td>
</table>
</form>
</div>
</div>
<div class="body">
<h1 style="display:none;">Indian First Open Source Education System</h1>
<div class="p1"> <p>Better Note Taking,<br> Better Class Info.</p></div>
<div class="p2"><p>Unotes is an online network dedicated <br> to making the college life easier and more enjoyable.<br>Share notes and course materials
</br>Rate your teachers<br>Keep in touch with classmates<br>Organize your college life<br>Features & More Good Stuff…</p></div>
<div class="img"><img src="laptop.jpg" class="img"></div>
<div>
<form class="signup" enctype="multipart/form-data" method="post" action="singup_user.php">
<table>
<td ><div  class="errorr">
</div></td>
<tr>
<td><p class="create">CREATE AN ACCOUNT</p></td>

<tr class="Fname"><td><input style="height:25px;" type="text" name="fname"  maxlength="10" placeholder="First Name"  > &nbsp;
<input type="text" style="height:25px;" name="sname" maxlength="10" placeholder="SurName" > </td>
<tr><td><input type="email" style="height:25px;" name="email"  placeholder="E-Mail id"  ></td></tr>
<td><input type="text" style="height:25px;" name="username" min="10" maxlength="10" placeholder="+91" pattern="^\d{10}$" title="eg:987654321X"> </td>
<tr><td><input name="password" style="height:25px;" id="password" placeholder="create your password" type="password" id="txtPassword" onkeyup="CheckPasswordStrength(this.value)" />
<span id="password_strength"></span> </td></tr>
<tr><td><input type="password" style="height:25px;" placeholder="Confirm Password" id="confirm_password" required></td></tr>
<tr>
<td><strong>Your City/Your Institute</strong><br><input style="height:25px;" name="date" type="text" placeholder="City/Institute" /><br><a href="#"class="p3" >
<div class="popup" onclick="myFunction()">
  Why do I need to provide my<span> city/institute?</span><span class="popuptext" id="myPopup">
  Providing your city/institute helps make sure that you get the right Unotes.in experience for your area.
  please visit our Data Policy.</span></a></td></div>
</tr></tr></tr>
<tr><td>
<input type="radio" name="gender" value="Male"  >
<span>Male</span>
<input type="radio" name="gender" value="Female" >
<span>Female</span>
</td></tr>
<tr><td><div><p>By clicking create an account, you agree to our<br><a href="#" class="p3">terms & conditions. </a></p></div></td> </tr>
<td><button class="button"  style="vertical-align:middle" name="signup"  ><span>Create An Account</span></button></td>
</table>
</form>
<script>
var password = document.getElementById("password")
, confirm_password = document.getElementById("confirm_password");

function validatePassword(){
if(password.value != confirm_password.value) {
  confirm_password.setCustomValidity("Passwords Don't Match");
} else {
  confirm_password.setCustomValidity('');
}
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

</div>
</div>
<div class="footer"><p class="p4">© unotes.in 2018 <p> <p class="name">Developed by AJAY KADOULA</p></div>
</div>
</body>
</html>
