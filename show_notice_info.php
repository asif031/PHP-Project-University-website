  <?php

    include("connection.php");


?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="styles/table.css" />

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

  <a class="link" href="update_notice_board.php">Update Notice Board</a> &emsp;
  <a class="link" href="delete_notice.php">Delete Notice</a><br>


    <table border="1" id="keywords">
  <tr>
    <th class="c1">id</th>
    <th class="c1">date</th>
    <th class="c1">notice</th>
  </tr>
  <?php

        $query = "select * from noticeboard";

        $result =mysqli_query($con, $query);
         if($result && mysqli_num_rows($result) > 0)
                {

                    echo "&emsp;<h3>Notice Board</h3>";

                    while ($data = mysqli_fetch_array($result)) {
                        ?>

                        <tr>
                          <td class="c2"><?php echo $data['id']."&emsp;"; ?></td>
                            <td class="c2"><?php echo $data['date']."&emsp;"; ?></td>
                            <td class="c2"><?php echo $data['notice']."&emsp;"; ?></td>

                        </tr>
                        <?php
                    }

                }


    ?>


</table>



</div>



    </body>
    </html>
