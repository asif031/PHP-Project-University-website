<?php
session_start();

	include("connection.php");
	include("adfunction.php");

	$user_data= check_login($con);


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$id = $_POST['id'];

		if(!empty($id))
		{

			//save to database
			$query = "DELETE FROM students WHERE student_id=$id";

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
	<title>deleteNotice</title>
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
		background-color: red;
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
			<div style="font-size: 20px;color: orange;">Delete Student Info</div>

			<p><label for="inp1">Enter the Student id You want to delete:</label>
			<input id="text" type="number" name="id"><br><br>

			<input id="button" type="submit" value="Delete"><br><br>

		</form>
	</div>
</body>
</html>
