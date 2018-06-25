
<?php
session_start();
if(isset($_SESSION["user_name"])){
include 'post2.php';



	    $row1 = $_GET["branch"];

       							foreach($bachelor as $row){
							//fetching all posts

							$course = $row['course'];
                            if($course==$row1 ){
								header("Location:bachelor.php ? branch=$row1");
							}else{ header("Location:notes.php ? error");}
								}header("Location:bachelor.php ? branch=$row1");





?>
<?php

}else { header("Location:index.php");
}
?>
