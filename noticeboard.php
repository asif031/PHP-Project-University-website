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

<?php

      $query = "select * from noticeboard ORDER BY date DESC";

      $result =mysqli_query($con, $query);
       if($result && mysqli_num_rows($result) > 0)
              {
                  while ($data = mysqli_fetch_array($result)) {
                      ?>
                          <?php echo $data['date']."//&emsp;"; ?>
                          <hr>
                          <?php echo $data['notice']."&emsp;"; ?>
                          <hr>

                      <?php
                  }

              }


  ?>


</table>


</div>



  </body>
  </html>
