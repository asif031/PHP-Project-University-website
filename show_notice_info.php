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
<div>
    <table border="1">
  <tr>
    <th>id</th>
    <th>date</th>
    <th>notice</th>
  </tr>
  <?php

        $query = "select * from noticeboard";

        $result =mysqli_query($con, $query);
         if($result && mysqli_num_rows($result) > 0)
                {

                    echo "<h3>Notice Board</h3>";

                    while ($data = mysqli_fetch_array($result)) {
                        ?>

                        <tr>
                          <td><?php echo $data['id']."&emsp;"; ?></td>
                            <td><?php echo $data['date']."&emsp;"; ?></td>
                            <td><?php echo $data['notice']."&emsp;"; ?></td>

                        </tr>
                        <?php
                    }

                }


    ?>


</table>


</div>



    </body>
    </html>
