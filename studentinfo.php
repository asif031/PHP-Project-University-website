<?php
session_start();

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
<a href="slogout.php">LOG-OUT</a><br><br>

<div>
  <h2>Your Personal Information:
  </h2>
  <?php
        $user=$_SESSION['user_id'];

        $query = "select * from students s INNER JOIN departments d on s.dept_id=d.dept_id
         INNER JOIN hall h on s.hall_id=h.hall_id WHERE student_id=$user";

        $result =mysqli_query($con, $query);
         if($result && mysqli_num_rows($result) > 0)
                {

                    while ($data = mysqli_fetch_array($result)) {
                        ?>


                        <table>
                          <tr>
                            <td>Name:&emsp;</td>
                            <td><?php echo $data['student_name']; ?></td>
                          </tr>
                          <tr>
                            <td>Roll:&emsp;</td>
                            <td><?php echo $data['student_id']; ?></td>
                          </tr>
                          <tr>
                            <td>  Department:&emsp;</td>
                            <td><?php echo $data['dept_name']; ?></td>
                          </tr>
                          <tr>
                            <td>Hall:&emsp;</td>
                            <td><?php echo $data['hall_name']; ?></td>
                          </tr>
                          <tr>
                            <td>Result:&emsp;</td>
                            <td><?php echo $data['CGPA']; ?> CGPA</td>
                          </tr>
                        </table>

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
