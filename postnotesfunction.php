<?php
session_start();
if(isset($_SESSION["user_name"])){

?>
<?php

if(isset($_POST["postnotes"]))
{



$branch=$_SESSION["branch"];

$subject =$_POST["subject"];

$description=$_POST["description"];
$add_pdf = $_FILES['post_image']['name'];
$imagetemp = $_FILES['post_image']['tmp_name'];
$name=$_POST["name"];
$institute=$_POST["institute"];
$mobile=$_POST["mobile"];

$email = $_POST['email'];






    if($subject !=""  AND $description !="" AND $add_pdf != ''  AND $name !="" AND $institute !="" AND  $mobile !="" AND $email !="" AND $branch!=""){

				include"db.php";
	            $connectionStatu = connect_db();

               move_uploaded_file($imagetemp,"pdf-flipbook-master/images/notes/$add_pdf");;


	            $status = post_notes($connectionStatu,$subject,$description,$add_pdf,$name,$institute,$mobile,$email,$branch);

	if($status==true){

	                   header("Location:notespdf.php?institute=$institute &branch=$branch");

}else  {  header("Location:postnotes.php?institute=$institute & branch=$branch");
				}

}
else  {  header("Location:postnotes.php?institute=$institute & branch=$branch");
        }

}
else {   header("Location:postnotes?institute=$institute & branch=$branch");
}


?>
<?php

}else { header("Location:index.php");
}
?>
