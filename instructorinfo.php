<?php
session_start();

    include("connection.php");
    include("ifunction.php");

    $user_data= check_login($con);

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
<a href="ilogout.php">LOG-OUT</a><br><br>

<div>
  <h2>Your Personal Information:
  </h2>
  <?php
        $user=$_SESSION['user_id'];


        $query = "select * from instructors i INNER JOIN departments d on i.dept_id=d.dept_id WHERE instructor_id=$user";

        $result =mysqli_query($con, $query);
         if($result && mysqli_num_rows($result) > 0)
                {

                    while ($data = mysqli_fetch_array($result)) {
                        ?>


                        <table>
                          <tr>
                            <td>Name:&emsp;</td>
                            <td><?php echo $data['instructor_name']; ?></td>
                          </tr>
                          <tr>
                            <td>Instructor ID:&emsp;</td>
                            <td><?php echo $data['instructor_id']; ?></td>
                          </tr>
                          <tr>
                            <td>  Department:&emsp;</td>
                            <td><?php echo $data['dept_name']; ?></td>
                          </tr>
                          <tr>
                            <td>Salary:&emsp;</td>
                            <td><?php echo $data['salary']; ?> BDT.</td>
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
