<?php

  $id="";

	if(isset($_COOKIE['name']))
	{

		$id = $_COOKIE['name'];

		}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/table.css" />
</head>
<body>

  <style type="text/css">


  .date_notice{
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
#about{
  display: block;
  margin-left:10%;
  width: 80%;
  margin-top:10px;
  background: #fff;
  border-radius: 10px;
  padding: 10px 17px;
  -webkit-box-shadow: 2px 2px 3px -1px rgba(0,0,0,0.35);
}
.uni{
  margin-left:10%;
  width: 80%;
  display: block;
  margin-top:10px;
  text-align: center;
  padding: 10px 17px;
  border-radius: 10px;
  background: #fff;
  -webkit-box-shadow: 2px 2px 3px -1px rgba(0,0,0,0.35);
}



  </style>
  <div class="header">
    <?php
include "header1.php";
    ?>
  </div>

    <div class="uni">
         <img src="image/uni.jpg" alt="This is a photo of the university">
         <figcaption>AOG University of Nazarick</figcaption>
    </div>





<section id="about">
    <h2>About This University</h2>
    <details>
        <summary>Short Information</summary>
        <p>The Ainz Ooal Gown University of Nazarick (AOGUN) is situated in a Isekai world , beside the tomb of Nazarick. This university is owned and developed by the overlord Ainz Ooal Gown, also known as the Sorcerer Supreme. This is the only renowned university that offers both traditional courses and Magical courses in the world. New students are always welcomed here to join.</p>
    </details>
</section>

<div class="uni">
    <h5>NoticeBoard::::</h5>
    <iframe src="noticeboard.php" width="80%" height="400px"></iframe>
</div>
<div class="uni">
<?php

  echo "Studies shows that this site is extremely helpful ";
    echo "for the ".$id.".";

if($id="students"){ ?> <a href="https://online.scu.edu.au/blog/10-proven-tips-study-smarter-not-harder/">Visit Site</a> <?php }
else if ($id="teachers"){ ?> <a href="https://www.wgu.edu/heyteach/article/8-essential-teaching-tips-someone-who-has-seen-it-all1901.html">Visit Site</a> <?php }
  else if ($id="leaders"){ ?> <a href="https://www.verywellmind.com/ways-to-become-a-better-leader-2795324">Visit Site</a> <?php }



?>

</div>


    <?php
include "footer1.php";
    ?>

</body>
</html>
