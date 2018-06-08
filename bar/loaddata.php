<div class="loader"></div>
<?php 
/*load the configuration */
$server = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'users-database';
$con = mysqli_connect($server, $dbuser, $dbpass);
if (isset($con)) {
 # code...
 $dbSelect = mysqli_select_db($con,$dbname);
 if (!$dbSelect) {
 echo "Problem in selecting database! Please contact administraator";
 die(mysqli_error($con));
 }
} else {
 echo "Problem in database connection! Please contact administraator";
 die(mysqli_error($con));
}
 
 /*create a retrieve query*/
 $sqlQuery = "SELECT * FROM `tblpeople` Where NAME LIKE '%".$_GET['name']."%'";
 /*Execute the query*/
 $result = mysqli_query($con,$sqlQuery) or die(mysqli_error($con));
 /*get the total rows*/ 
 $max = mysqli_num_rows($result);
 /* validating the result */ 
 if ($max==0){ 
 /*retrieving data */
 while ($row = mysqli_fetch_array($result)) { 
 
 echo '<div id="output" class="form-group">' .$row['NAME'].' ['.$row['ADDRESS'].'] <a href="" >
 Twitter like Autosuggestion with jQuery, Ajax and PHP </a>
 </div>'; 
 }
 
}else{
 echo '<div id="output" class="form-group"><h1>No result found!</h1></div>';
}
 ?> 
 <div style="border-bottom:dotted 1px #ddd; margin-bottom:15px";><div>