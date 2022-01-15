<?php
session_start();

    include("connection.php");
    include("sfunction.php");

    $user_data= check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
include "header1.php";
    ?>
<a href="slogout.php">LOG-OUT</a>
     <?php
include "footer1.php";
    ?>
    
</body>
</html>