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

    body{

      background-color: rgba(225, 210, 245, 0.7);
    }
    div{
      text-align: center;
    }

    .date_notice{
	display: block;
	float: left;
	margin:2px 2px 2px 2px;
	text-align: center;
	background:  #d66b98 ;
	border-radius: 5px;
	padding: 3px 6px;
	color: #fff;
  }
  .notice2{
    margin-top: 20px;
  }
  .date_news{
	display: block;
  width: 95%;
	float: left;
	margin:2px 2px 2px 2px;
	text-align: left;
	background:    #31c6d8  ;
	border-radius: 5px;
	padding: 3px 6px;
	color: #fff;
}


    </style>

<div class="notice2">
  <marquee width="80%" direction="up" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" height="300px">

    <?php

          $query = "select * from noticeboard ORDER BY date DESC";

          $result =mysqli_query($con, $query);
           if($result && mysqli_num_rows($result) > 0)
                  {
                      while ($data = mysqli_fetch_array($result)) {
                          ?>
                          <div class="date_notice">
                             <?php echo $data['date']."&emsp;"; ?>
                           </div>
                          <div class="date_news">
                             <?php echo $data['notice']."&emsp;"; ?>
                           </div><br>

                          <?php
                      }

                  }


      ?>

  </marquee>


</div>



  </body>
  </html>
