<?php
session_start();
if(isset($_SESSION["user_name"])){

$user_id= $_SESSION["user_id"];
$post_id=$_POST['id'];

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>comment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

</script>

  </head>
  <body >

<div class="inputcomment" onload="prettyPrint()">

<form action="commentdb.php?post_id=<?php echo $post_id;?>" enctype="multipart/form-data" method="post">
  <input name="comment" style="color:grey; height:50px; border:1px solid grey; border-radius:10px; width:100%; text-align: left;  display:block;" placeholder="Comment Here..." />
  <button name="commentbutton" class="comm" style="float:right; margin-top:-25px; background-color: #00b5ff; color:white; "> Comment</button>
</form>
</div>

</body>
</html>
<?php

}else { header("Location:index.php");
}
?>
