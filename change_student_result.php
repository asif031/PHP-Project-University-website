<?php
session_start();

  include("connection.php");
  include("adfunction.php");

  $user_data= check_login($con);


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$id = $_POST['id'];
    $nresult = $_POST['nresult'];

		if(!empty($id) && !empty($nresult))
		{

			//save to database
			$query = "UPDATE students SET CGPA=$nresult  WHERE student_id=$id";

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
	<title>changeresult</title>
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
			<div style="font-size: 20px;color: orange;">Change Student Result</div>

			<p><label for="inp1">Enter the Student id:</label>
			<input id="text" type="number" name="id"><br><br>

      <p><label for="inp1">Enter New Result:</label>
			<input id="text" type="text" name="nresult"><br><br>

			<input id="button" type="submit" value="Change"><br><br>

		</form>
	</div>
</body>
</html>
