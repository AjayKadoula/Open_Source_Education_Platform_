<?php
session_start();
if(isset($_SESSION["user_name"])){
include './bar\navigation_bar.php';


?>
<!doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">

<title> learn_with_earn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css\learn.css" media="screen">


</head>
 <body>
 <center>
    <div class="body" >
	<h1>Learn with earn</h1><hr>
	</div>
</center>
 </body>
</html>

<?php

}else { header("Location:index.php");
}
?>
