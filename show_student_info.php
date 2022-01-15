
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
<div>
    <table border="1">
  <tr>
    <th>student_id</th>
    <th>dept_id</th>
    <th>student_name</th>
    <th>password</th>
    <th>cgpa</th>
  </tr>
  <?php

        $query = "select * from students";

        $result =mysqli_query($con, $query);
         if($result && mysqli_num_rows($result) > 0)
                {

                    echo "<h3>Students Table</h3>";

                    while ($data = mysqli_fetch_array($result)) {
                        ?>

                        <tr>
                            <td><?php echo $data['student_id']."&emsp;"; ?></td>
                            <td><?php echo $data['dept_id']."&emsp;"; ?></td>
                            <td><?php echo $data['student_name']."&emsp;"; ?></td>
                            <td><?php echo $data['password']."&emsp;"; ?></td>
                            <td><?php echo $data['CGPA']."&emsp;"; ?></td>
                        </tr>
                        <?php
                    }
                    
                }


    ?>
  

</table> 


</div>

         
    
    </body>
    </html>