<?php
session_start();

    include("connection.php");
    include("ifunction.php");

    $user_data= check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
    <title>instructorinfo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/table.css" />
</head>
<body>
    <?php
include "header1.php";
    ?>
    <div class="logout">
        <a href="ilogout.php" align=right>LOG-OUT</a>

    </div>


<div id="wrapper">
  <h4>Your Personal Information:
  </h4>
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
