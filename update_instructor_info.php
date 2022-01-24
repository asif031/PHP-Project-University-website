<?php
session_start();

	include("connection.php");
	include("adfunction.php");

	$user_data= check_login($con);


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$instructor_name = $_POST['instructor_name'];
		$password = $_POST['password'];
		$instructor_id = $_POST['instructor_id'];
		$salary = $_POST['salary'];
		$dept_id = $_POST['dept_id'];

		if(!empty($instructor_name) && !empty($password) && !empty($instructor_id) && !empty($salary) && !empty($dept_id))
		{

			//save to database
			$query = "insert into instructors (instructor_id, instructor_name,dept_id,password, salary) values ('$instructor_id','$instructor_name','$dept_id','$password','$salary')";

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
			<div style="font-size: 20px;margin: 10px;color: white;">Instructor Info Update</div>
			<p><label for="inp1">instructor_id:</label>
			<input id="text" type="number" name="instructor_id"><br><br>

			<p><label for="inp3">dept_id:</label>
			<input id="text" type="number" name="dept_id"><br><br>
			<p><label for="inp4">instructor_name:</label>

			<input id="text" type="text" name="instructor_name"><br><br>
			<p><label for="inp5">password:</label>
			<input id="text" type="password" name="password"><br><br>
			<p><label for="inp2">Salary:</label>
			<input id="text" type="number" name="salary"><br><br>

			<input id="button" type="submit" value="Update"><br><br>

		</form>
	</div>
</body>
</html>
