<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/table.css" />
</head>
<body>
    <?php
include "header1.php";
    ?>
    <div class="logout">
<a href="studentinfo.php">Student's Profile</a><br><br>
</div>

<div id="wrapper">
  <h4>Current Students of the University:
  </h4>
    <table align="center" id="keywords" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <th class="c1">Student Name &emsp;</th>
    <th class="c1">Department &emsp;</th>
    <th class="c1">Hall</th>
  </tr>
  <?php

        $query = "select * from students s INNER JOIN departments d on s.dept_id=d.dept_id
         INNER JOIN hall h on s.hall_id=h.hall_id ORDER BY s.dept_id";

        $result =mysqli_query($con, $query);
         if($result && mysqli_num_rows($result) > 0)
                {

                    while ($data = mysqli_fetch_array($result)) {
                        ?>

                        <tr>
                          <td class="c2"><?php echo $data['student_name']."&emsp;"; ?></td>
                          <td class="c2"><?php echo $data['dept_name']."&emsp;"; ?></td>
                          <td class="c2"><?php echo $data['hall_name']."&emsp;"; ?></td>

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
