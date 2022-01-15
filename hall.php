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
      <h2>Halls of the University:
      </h2>
        <table align="center">
      <tr>
        <th>Hall Name &emsp;</th>
        <th>Capacity &emsp;</th>
        <th>Allocated &emsp;</th>
      </tr>
      <?php

            $query = "select * from hall";

            $result =mysqli_query($con, $query);
             if($result && mysqli_num_rows($result) > 0)
                    {

                        while ($data = mysqli_fetch_array($result)) {
                            ?>

                            <tr>

                            <?php
                              $i=intval($data['hall_id']);
                            $qury = "select * from students where hall_id=$i";

                              $result2 =mysqli_query($con, $qury);
                              $count=mysqli_num_rows($result2);
                              ?>
                              <td><?php echo $data['hall_name']."&emsp;"; ?></td>
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
