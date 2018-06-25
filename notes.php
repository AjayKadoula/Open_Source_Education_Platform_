<?php
session_start();
if(isset($_SESSION["user_name"])){
include './bar\navigation_bar.php';
?>

<!doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<title> profile</title>
<link rel="stylesheet" href="css\notes.css" type="text/css">
    <script src="jquery\notes.js" type="text/javascript"></script>
<style>
body{

	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwIXqs81nYwzSqqIykOqY56RMBQ-QmK_EB5dMqyyX67yzlJLXH");
}

hr{
	    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid blue;
    margin: 1em 0;
    padding: 0;
}
</style>
</head>
<body>
<center><br><br><br><br>
<div class="body">
<div style="max-width:1100px;"><h1> NOTES</h1><hr></div><br>
<div class="borderline">
<div><h1>DEGREE PROGRAM DIRECTORY</h1></div>
<div class="pr"><p>
 Research your options when it comes to choosing the degree you want to earn,
 as the program best suited for you will depend on your personal and professional aspirations.
 We’ve broken down the most popular degrees in the fastest-growing industries.
 Read through our guides to learn more about each field’s available higher education tracks,
 and the qualifications, curricula, career expectations, salary averages, and next steps for each one.</p></div></div><hr><br><br>



       <div>



           <div style="height:320px;">
          <h2> Engineering and Technology</h2><br><br>



		  <div class="dropdown">
           <button  class="dropbtn">Computer Science And Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=computer_science">Bachelor's</a>
             <a href="notesfunctionbach.php ? branch=computer_science_mastre">Master's</a>
            <a href="notesfunctionbach.php ? branch=computer_science_phd">Ph.D.</a>
            </div>
             </div>

			<div class="dropdown">
           <button  class="dropbtn">Mechanical<br> Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Mechanical_Engineering">Bachelor's</a>
             <a href="notesfunctionbach.php ? branch=Mechanical_Engineering_master">Master's</a>
            <a href="notesfunctionbach.php ? branch=Mechanical_Engineering_phd">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Electronics And Comm. Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Electronics_And_Comm_Engineering">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Civil<br> Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Civil_Engineering">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Electrical<br> Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Electrical_Engineering">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div><br><br>


		    <div class="dropdown">
           <button  class="dropbtn">Bio-Medical Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Bio_Medical_Engineering">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Material Science And Techanology</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Material_Science_And_Techanology">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Bio<br>Techanology</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Bio_Techanology">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Instrumentation<br> Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Instrumentation_Engineering">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Aeronautical <br>Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Aeronautical_Engineering">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>



			 </div><hr><br><br>


			  <div style="height:320px;">
          <h2> Engineering and Technology</h2><br><br>



		  <div class="dropdown">
           <button  class="dropbtn">Agricultural <br>Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Agricultural_Engineering">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

			<div class="dropdown">
           <button  class="dropbtn">Automobile <br>Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Automobile_Engineering">Bachelor's</a>
             <a href="">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Marine <br>Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Marine_Engineering">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Chemical <br>Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Chemical_Engineering">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn"> Textile <br>Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Textile_Engineering">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div><br><br>


		    <div class="dropdown">
           <button  class="dropbtn">Space <br>Techanology</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Space_Techanologyg">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Robotics <br>Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Robotics_Engineering">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Power <br>Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Power_Engineering">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Metallurgical <br>Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Metallurgical_Engineering">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Industrial <br>Engineering</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Industrial_Engineering">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>



			 </div><hr><br><br>

		 <div style="height:320px;">
          <h2> Science</h2><br><br>



		  <div class="dropdown">
           <button  class="dropbtn">Department of Chemistry</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Chemistry">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

			<div class="dropdown">
           <button  class="dropbtn">Department of <br>Physics</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Physics">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Biology</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Biology">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Geography</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Geography">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Department of<br> Geology</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Geology">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div><br><br>


		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Mathematics</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Mathematics">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Department of Electronic Science</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of-Electronic_Science">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Department of Static & O.R.</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Static_&_O_R">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Dept. of Comp. Sci. And Applications</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Dept_of_Comp_Sci_And_Applications">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Instrumentation</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Instrumentation">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>



			 </div><hr><br><br>

		 <div style="height:320px;">
          <h2> Art and Language</h2><br><br>



		  <div class="dropdown">
           <button  class="dropbtn">Department of <br>English</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_English">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

			<div class="dropdown">
           <button  class="dropbtn">Department of <br>Hindi</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Hindi">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Punjabi</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Punjabi">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Department of Foreign Languages</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Foreign_Languages">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Department of Library and Information Sci.</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Library _and_Information_Sci">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div><br><br>


		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Education</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Education">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Physical Education</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Physical_Education">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

			<div class="dropdown">
           <button  class="dropbtn">Department of Fashion Designing</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Fashion_Designing">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

            <div class="dropdown">
           <button  class="dropbtn">Department of<br> Urdu</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Urdu">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Department of fine arts in Graphics</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_fine_arts_in_Graphics">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>



			 </div><hr><br><br>

		 <div style="height:320px;">
          <h2> Social Science</h2><br><br>



		  <div class="dropdown">
           <button  class="dropbtn">Department of <br>Political Science</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Political_Science">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

			<div class="dropdown">
           <button  class="dropbtn">Department of <br>History</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_History">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Economics</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Economics">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Social Work</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Social_Work">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Public Administration</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Public_Administration">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div><br><br>


		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Sociology</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Sociology">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Psychology</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Psychology">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Women's Study Research Centre</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Women's_Study_Research_Centre">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>



			<div class="dropdown">
           <button  class="dropbtn">Department of<br> Humanities</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Humanities">Bachelor's</a>
             <a href="#about">Masters's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Department of <br> Law</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Law">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>



			 </div><hr><br><br>

		 <div style="height:320px;">
          <h2> Life Science</h2><br><br>



		  <div class="dropdown">
           <button  class="dropbtn">Department of <br>Botany</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Botany">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

			<div class="dropdown">
           <button  class="dropbtn">Department of<br> Zoology</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Zoology">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Bio-Chemistry</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Bio_Chemistry">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Biotechanology</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Biotechanology">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Microbiology</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Microbiology">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div><br><br>


		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Home Science</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Home_Science">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Institute of <br>Environmental Studies</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Institute_of_Environmental_Studies">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Department of Aqua Science</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Aqua_Science">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Department of Applied Science</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Applied_Science">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn"> Department of <br>Nursing</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Nursing">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>



			 </div><hr><br><br>

		 <div style="height:320px;">
          <h2> Indic Studies</h2><br><br>



		  <div class="dropdown">
           <button  class="dropbtn">Department of <br>Philisophy</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Philisophy">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

			<div class="dropdown">
           <button  class="dropbtn">A.I.H,Culture & Archaeology</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=A.I.H_Culture_&_Archaeology">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Music and Dance</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Music_and_Dance">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Department of <br>Fine Arts</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Fine_Arts">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Department of Sanskrit,Pali & Prakrit</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Sanskrit_Pali_&_Prakrit">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
			 </div>

			 </div><hr><br><br>

		 <div style="height:320px;">
          <h2> Commerce and Management</h2><br><br>



		  <div class="dropdown">
           <button  class="dropbtn">Department of <br>Commerce</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Department_of_Commerce">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

			<div class="dropdown">
           <button  class="dropbtn">University School of Management</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=University_School_of_Management">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Dept. of Tourism & Hotel Management</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Dept_of_Tourism_&_Hotel_Management">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>

		    <div class="dropdown">
           <button  class="dropbtn">Institute of<br> Management Studies</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Institute_of_Management_Studies">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div>


		    <div class="dropdown">
           <button  class="dropbtn">Institute of Mass Commu.& Media Tech.</button>
           <div  class="dropdown-content">
            <a href="notesfunctionbach.php ? branch=Institute_of_Mass_Commu_&_Media_Tech">Bachelor's</a>
             <a href="#about">Master's</a>
            <a href="#contact">Ph.D.</a>
            </div>
             </div><br><br>





			 </div><hr><br><br>




      </div>








</div>
<p style="color:black;">© 2018 unotes.in AJAY KADOULA</p>
</center>
</body>
</html>



<?php

}else { header("Location:index.php");
}
?>
