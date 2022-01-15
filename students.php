<?php
include("connection.php");
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
<a href="slogin.php">LOG-IN</a><br><br>

<div>
  <h2>Current Students of the University:
  </h2>
    <table align="center">
  <tr>
    <th>Student Name &emsp;</th>
    <th>Department &emsp;</th>
    <th>Hall</th>
  </tr>
  <?php

        $query = "select * from students s INNER JOIN departments d on s.dept_id=d.dept_id
         INNER JOIN hall h on s.hall_id=h.hall_id";

        $result =mysqli_query($con, $query);
         if($result && mysqli_num_rows($result) > 0)
                {

                    while ($data = mysqli_fetch_array($result)) {
                        ?>

                        <tr>
                          <td><?php echo $data['student_name']."&emsp;"; ?></td>
                          <td><?php echo $data['dept_name']."&emsp;"; ?></td>
                          <td><?php echo $data['hall_name']."&emsp;"; ?></td>

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
