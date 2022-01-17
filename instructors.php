<?php
session_start();

    include("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Instructors</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/table.css" />
</head>
<body>
    <?php
include "header1.php";
    ?>
    <div class="logout">
<a href="instructorinfo.php">Instructor's Profile</a>
</div>

<div id="wrapper">
  <h4>Current Instructors of the University:
  </h4>
    <table align="center" id="keywords">
  <tr>
    <th class="c1">Instructor Name &emsp;</th>
    <th class="c1">Department &emsp;</th>
  </tr>
  <?php

        $query = "select * from instructors i INNER JOIN departments d on i.dept_id=d.dept_id ORDER BY i.dept_id";

        $result =mysqli_query($con, $query);
         if($result && mysqli_num_rows($result) > 0)
                {

                    while ($data = mysqli_fetch_array($result)) {
                        ?>

                        <tr>
                          <td class="c2"><?php echo $data['instructor_name']."&emsp;"; ?></td>
                          <td class="c2"><?php echo $data['dept_name']."&emsp;"; ?></td>

                        </tr>

                        <?php
                    }

                }


    ?>
</table>


</div>
     <?php
include "footer1.php";
    ?>

</body>
</html>
