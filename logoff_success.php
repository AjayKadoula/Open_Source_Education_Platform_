<?php
 header("Refresh:10; URL=index.php");

?>



<!doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<title> YOU Successfully Logoff</title>
<link rel="stylesheet" href="homepage.css" type="text/css">
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
</head>
<body>

<center>
<h1>You Are Successfully logoff</h1>
<h1>Thanks for visiting.</h1>
<br>
<div>
<h2>
<a href="index.php">click here for new login</a></div></h2>
<p> Redirecting for new login <span id="countdowntimer">10 </span> Seconds.....</p>

<script type="text/javascript">
    var timeleft = 10;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
	</script>
<canvas id="myCanvas"></canvas>
    <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/bubbles.js"></script>
    <script type="text/javascript" src="jquery\animatedlogo.js"></script>

<br>

</center>
</body>
</html>