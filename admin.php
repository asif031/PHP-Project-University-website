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
        <a href="adlogout.php" align=right>LOG-OUT</a>


    <?php
    include "show_student_info.php";
    ?>
    <a href="update_student_info.php">Add new Student</a> &emsp;
    <a href="change_student_password.php">Change password</a> &emsp;
    <a href="change_student_result.php">Change result</a> &emsp;
    <a href="delete_student.php">Delete Student</a>
    <?php
    include "show_instructor_info.php";
    ?>
    <a href="update_instructor_info.php">Add new Instructor</a> &emsp;
    <a href="change_instructor_password.php">Change password</a> &emsp;
    <a href="change_instructor_Salary.php">Change Salary</a> &emsp;
    <a href="delete_instructor.php">Delete Instructor</a>
    <?php
    include "show_notice_info.php";
    ?>
    <a href="update_notice_board.php">Update Notice Board</a> &emsp;
    <a href="delete_notice.php">Delete Notice</a>

    </div>


     <?php
include "footer1.php";
    ?>


</body>
</html>
