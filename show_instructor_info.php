
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
    <th>instructor_id</th>
    <th>instructor_name</th>
    <th>dept_id</th>
    <th>password</th>
    <th>salary</th>
  </tr>
  <?php

        $query = "select * from instructors";

        $result =mysqli_query($con, $query);
         if($result && mysqli_num_rows($result) > 0)
                {

                    echo "<h3>Instructors Table</h3>";

                    while ($data = mysqli_fetch_array($result)) {
                        ?>

                        <tr>
                            <td><?php echo $data['instructor_id']."&emsp;"; ?></td>
                            <td><?php echo $data['instructor_name']."&emsp;"; ?></td>
                            <td><?php echo $data['dept_id']."&emsp;"; ?></td>
                            <td><?php echo $data['password']."&emsp;"; ?></td>
                            <td><?php echo $data['salary']."&emsp;"; ?></td>
                        </tr>
                        <?php
                    }
                    
                }


    ?>
  

</table> 


</div>

         
    
    </body>
    </html>