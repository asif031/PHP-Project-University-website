<?php
session_start();

  include("connection.php");
  include("adfunction.php");

  $user_data= check_login($con);


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$id = $_POST['id'];
    $nsalary = $_POST['nsalary'];

		if(!empty($id) && !empty($nsalary))
		{

			//save to database
			$query = "UPDATE instructors SET salary=$nsalary  WHERE instructor_id=$id";

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
			<div style="font-size: 20px;color: orange;">Change Instructor Salary</div>

			<p><label for="inp1">Enter the Instructor id:</label>
			<input id="text" type="number" name="id"><br><br>

      <p><label for="inp1">Enter New Salary:</label>
			<input id="text" type="number" name="nsalary"><br><br>

			<input id="button" type="submit" value="Change"><br><br>

		</form>
	</div>
</body>
</html>
