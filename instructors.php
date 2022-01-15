<?php
session_start();

    include("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Instructors</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
include "header1.php";
    ?>
<a href="ilogin.php">LOG-IN</a>

<div>
  <h2>Current Instructors of the University:
  </h2>
    <table align="center">
  <tr>
    <th>Instructor Name &emsp;</th>
    <th>Department &emsp;</th>
  </tr>
  <?php

        $query = "select * from instructors i INNER JOIN departments d on i.dept_id=d.dept_id";

        $result =mysqli_query($con, $query);
         if($result && mysqli_num_rows($result) > 0)
                {

                    while ($data = mysqli_fetch_array($result)) {
                        ?>

                        <tr>
                          <td><?php echo $data['instructor_name']."&emsp;"; ?></td>
                          <td><?php echo $data['dept_name']."&emsp;"; ?></td>

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
