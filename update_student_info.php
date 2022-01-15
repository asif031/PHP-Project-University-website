<?php
session_start();

	include("connection.php");
	include("adfunction.php");

	$user_data= check_login($con);


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$student_name = $_POST['student_name'];
		$password = $_POST['password'];
		$student_id = $_POST['student_id'];
		$cgpa = $_POST['cgpa'];
		$dept_id = $_POST['dept_id'];
		$hall_id=$_POST['hall_id'];

		if(!empty($student_name) && !empty($password) && !empty($student_id) && !empty($cgpa) && !empty($dept_id) && !empty($hall_id))
		{

			//save to database
			$query = "insert into students (student_id, dept_id,student_name,password, cgpa,hall_id) values ('$student_id','$dept_id','$student_name','$password','$cgpa','$hall_id')";

			mysqli_query($con, $query);

			header("Location: admin.php");
			die;
		}else
		{
			echo "empty field!";
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
			<div style="font-size: 20px;margin: 10px;color: white;">Student Info Update</div>
			<p><label for="inp1">student_id:</label>
			<input id="text" type="number" name="student_id"><br><br>

			<p><label for="inp3">dept_id:</label>
			<input id="text" type="text" name="dept_id"><br><br>
			<p><label for="inp4">student_name:</label>

			<input id="text" type="text" name="student_name"><br><br>
			<p><label for="inp5">password:</label>
			<input id="text" type="password" name="password"><br><br>
			<p><label for="inp2">cgpa:</label>
			<input id="text" type="text" name="cgpa"><br><br>
			<p><label for="inp6">hall_id:</label>
			<input id="text" type="number" name="hall_id"><br><br>

			<input id="button" type="submit" value="Update"><br><br>

		</form>
	</div>
</body>
</html>
