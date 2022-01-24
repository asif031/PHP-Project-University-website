<?php
include("connection.php");
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
    <div id="wrapper">
      <h4>Current Departments of the University:
      </h4>
        <table align="center" id="keywords" cellspacing="0" cellpadding="0" width="100%">
      <tr>
        <th class="c1">Department Code &emsp;</th>
        <th class="c1">Department Name &emsp;</th>
        <th class="c1">Capacity &emsp;</th>
        <th class="c1">Enrolled &emsp;</th>
      </tr>
      <?php

            $query = "select * from departments";

            $result =mysqli_query($con, $query);
             if($result && mysqli_num_rows($result) > 0)
                    {

                        while ($data = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                              <td class="c2"><?php echo $data['dept_id']."&emsp;"; ?></td>

                            <?php
                              $i=intval($data['dept_id']);
                            $qury = "select * from students where dept_id=$i";

                              $result2 =mysqli_query($con, $qury);
                              $count=mysqli_num_rows($result2);
                              ?>
                              <td class="c2"><?php echo $data['dept_name']."&emsp;"; ?></td>
                              <td class="c2"><?php echo $data['capacity']."&emsp;"; ?></td>
                              <td class="c2"><?php echo $count ?></td>

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
