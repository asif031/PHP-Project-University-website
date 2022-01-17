<?php
session_start();

    include("connection.php");
    include("sfunction.php");
  $user_data= check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
    <title>StudentInfo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/table.css" />
</head>
<body>
    <?php
include "header1.php";
    ?>
    <div class="logout">
        <a href="slogout.php" align=right>LOG-OUT</a>

    </div>

<div id="wrapper">
  <h4>Your Personal Information:
  </h4>
  <?php
        $user=$_SESSION['user_id'];

        $query = "select * from students s INNER JOIN departments d on s.dept_id=d.dept_id
         INNER JOIN hall h on s.hall_id=h.hall_id WHERE student_id=$user";

        $result =mysqli_query($con, $query);
         if($result && mysqli_num_rows($result) > 0)
                {

                    while ($data = mysqli_fetch_array($result)) {
                        ?>


                        <table align="center" id="keywords" cellspacing="0" cellpadding="0" width="100%">
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
