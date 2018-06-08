<?php 
if(isset($_POST['forgotSubmit'])){
// check for valid username address
$username = $_POST['username'];
if($username!=""){
					include"db.php";
	            $connectionStatu = connect_db();
				$status = find_username($connectionStatu,$username);
				if($status == true){
					header("Location:index.php?sucess full");
				}
				else{header("Location:forgotten_password.php ?id=error& V=Username not exist Please input valid Username");}
}
else{header("Location:forgotten_password.php ?id=error& V=All Field Mandatory");}
} else{header("Location:forgotten_password.php ?id=error& V=Please Click Submit Button");}