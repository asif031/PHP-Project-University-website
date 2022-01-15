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
</head>
<body>
    <?php
include "header1.php";
    ?>
    
    <div>
        <a href="slogout.php" align=right>LOG-OUT</a>


    <?php
    include "show_student_info.php";
    ?>
    <a href="update_student_info.php">Update Students Info</a>
    <?php
    include "show_instructor_info.php";
    ?>
    <a href="update_instructor_info.php">Update Instructors Info</a>
    <?php
    include "show_notice_info.php";
    ?>
    <a href="update_notice_board.php">Update Notice Board</a>
    
    </div>
   

     <?php
include "footer1.php";
    ?>
    

</body>
</html>
