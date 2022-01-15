<?php
session_start();

    include("connection.php");
    include("ifunction.php");

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
<a href="ilogout.php">LOG-OUT</a><br><br>
     <?php
include "footer1.php";
    ?>

</body>
</html>
