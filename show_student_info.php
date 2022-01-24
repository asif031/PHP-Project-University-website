<?php


    include("connection.php");

?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
      <style type="text/css">


      .link{
    display: block;
    float: left;
    margin:2px 2px 2px 2px;
    text-align: center;
    background:  #d66b98 ;
    border-radius: 5px;
    border-radius: 10px;
    padding: 3px 6px;
    color: #fff;
    }
</style>
<div>

  <a class="link" href="update_student_info.php">Add new Student</a> &emsp;
  <a class="link" href="change_student_password.php">Change password</a> &emsp;
  <a class="link" href="change_student_result.php">Change result</a> &emsp;
  <a class="link" href="delete_student.php">Delete Student</a><br>


    <table border="1" id="keywords">
  <tr>
    <th class="c1">student_id</th>
    <th class="c1">dept_id</th>
    <th class="c1">student_name</th>
    <th class="c1">password</th>
    <th class="c1">cgpa</th>
    <th class="c1">hall_id</th>
  </tr>
  <?php

        $query = "select * from students";

        $result =mysqli_query($con, $query);
         if($result && mysqli_num_rows($result) > 0)
                {

                    echo "&emsp;<h3>Students Table</h3>";

                    while ($data = mysqli_fetch_array($result)) {
                        ?>

                        <tr>
                            <td class="c2"><?php echo $data['student_id']."&emsp;"; ?></td>
                            <td class="c2"><?php echo $data['dept_id']."&emsp;"; ?></td>
                            <td class="c2"><?php echo $data['student_name']."&emsp;"; ?></td>
                            <td class="c2"><?php echo $data['password']."&emsp;"; ?></td>
                            <td class="c2"><?php echo $data['CGPA']."&emsp;"; ?></td>
                            <td class="c2"><?php echo $data['hall_id']."&emsp;"; ?></td>
                        </tr>
                        <?php
                    }

                }


    ?>


</table>



</div>



    </body>
    </html>
