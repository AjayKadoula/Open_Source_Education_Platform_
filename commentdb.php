<?php
session_start();
$user_id= $_SESSION["user_id"];
if(isset($_POST['commentbutton'])){
$comment=$_POST['comment'];
$post_id=$_REQUEST['post_id'];
 if($user_id !="" And $comment!="" And $post_id !="" ){
   include('db.php');
   $connectionStatu=connect_db();
   $status=comment($connectionStatu, $user_id, $comment,$post_id);
   if($status==true){
     header ('location:home.php');
   }else{header ('location:home.php?Try-Again');}


 }else{header ('location:home.php?Try-Again');}
}else{header ('location:home.php?Try-Again');}
?>
