<?php
session_start();

	include("connection.php");
	include("adfunction.php");

	$user_data= check_login($con);


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$notice = $_POST['notice'];

		if(!empty($notice))
		{

			//save to database
			$query = "insert into noticeboard (notice) values ('$notice')";

			mysqli_query($con, $query);

			header("Location: admin.php");
			die;
		}else
		{
			include "js/emptyfield.js";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">

	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">

		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Update Notice</div>

			<p><label for="inp1">Add Notice:</label>
			<input id="text" type="text" name="notice"><br><br>

			<input id="button" type="submit" value="add"><br><br>

		</form>
	</div>
</body>
</html>
