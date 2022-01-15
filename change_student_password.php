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
  	$table="students";
  	$table_id="student_id";
  	$user="student";
  	include ("changepassword.php");

  	?>


  </body>
  </html>
