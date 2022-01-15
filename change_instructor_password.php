<?php
session_start();

	include("connection.php");
	include("adfunction.php");

	$user_data= check_login($con);
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<title>studentpasswordchange</title>
  </head>
  <body>
  	<?php
  	$table="instructors";
  	$table_id="instructor_id";
  	$user="Instructor";
  	include ("changepassword.php");

  	?>


  </body>
  </html>
