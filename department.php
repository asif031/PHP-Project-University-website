<?php
include("connection.php");
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
      <h2>Current Departments of the University:
      </h2>
        <table align="center">
      <tr>
        <th>Department Code &emsp;</th>
        <th>Department Name &emsp;</th>
        <th>Capacity &emsp;</th>
        <th>Enrolled &emsp;</th>
      </tr>
      <?php

            $query = "select * from departments";

            $result =mysqli_query($con, $query);
             if($result && mysqli_num_rows($result) > 0)
                    {

                        while ($data = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                              <td><?php echo $data['dept_id']."&emsp;"; ?></td>

                            <?php
                              $i=intval($data['dept_id']);
                            $qury = "select * from students where dept_id=$i";

                              $result2 =mysqli_query($con, $qury);
                              $count=mysqli_num_rows($result2);
                              ?>
                              <td><?php echo $data['dept_name']."&emsp;"; ?></td>
                              <td><?php echo $data['capacity']."&emsp;"; ?></td>
                              <td><?php echo $count ?></td>

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
