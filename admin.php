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
    <link rel="stylesheet" href="styles/table.css" />
</head>
<body>
    <?php
include "header1.php";
    ?>


    <div class="logout">
        <a href="adlogout.php" align=right>LOG-OUT</a>

    </div>

<div >

  <label for="page">Upadate:</label>
  <form method="post">
    <select name="page" id="page">
      <option value="student">student</option>
      <option value="instructor">instructor</option>
      <option value="notice">notice</option>
    </select>
    <input id="button" type="submit" value="submit"><br><br>

  </form>

</div>
<div id="wrapper">

  <?php
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
      //something was posted
      $page = $_POST['page'];

      if(!empty($page))
      {
        if($page=="student"){
          include "show_student_info.php";
        }
        else if($page=="instructor"){
          include "show_instructor_info.php";
        }
        else if($page=="notice"){
          include "show_notice_info.php";
        }

      }

  }



  ?>


</div>



     <?php
include "footer1.php";
    ?>


</body>
</html>
