<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="styles/table.css" />
</head>
<body>

  <style type="text/css">

             #address {

                 margin-left:20%;
                 margin-top:10%;
                 text-align:center;

             }
             #phone{

                 margin-left:20%;
                 margin-top:10%;
                 text-align:center;
             }
             #email{

                 margin-left:20%;
                 margin-top:10%;
                 text-align:center;
             }
             #footer{
               margin-top: 10px;
             }
             .contact{

               margin-left:10%;
               width: 80%;
               margin-top:10px;
             }
             h1{
                 color:green;
                 text-align:center;
             }
         </style>
         <?php
include "header1.php";
    ?>


  <div class="contact">
    <table align="center">
    <tr>



      <td><div id="address">
         <img src="image/address.png" width="35px" alt="address icon">
      <p><span style="color: #;"><b>Academic Division Office</b><br>
        221B Baker St<br>
    London NW1 6XE, UK
        </span>
      <span style="color: #;"><b>Tomb of Nazarick Ofiice</b><br>
      Great Tomb of Nazarick<br>
      Northeast of Carne Village</span></p>

    </div></td>
    <td>&emsp;&emsp;&emsp;</td>
      <td><div id="phone">
        <img src="image/phone.png" width="40px" alt="phone icon">
      <p><span style="color: #;"><b>Tomb of Nazarick Ofiice</b><br>
      0191XXXXXXX<br></span>
      <span style="color: #;"><b>Academic Division Office</b><br>
      0171XXXXXXX phone1<br>
      0181XXXXXXX phone2</span></p>

    </div></td>

    <td>&emsp;&emsp;&emsp;</td>
      <td>  <div id="email">
          <img src="image/email.png" width="45px"  alt="email icon">
        <p><span style="color: #;"><b>AOGUN Info</b></span><br>
        <span style="color: #;"> <a style="color: #;" href="mailto:info@aogun.edu.com">info@aogun.edu.com</a></span><br>
        <span style="color: #;"><b>AOGUN Service</b></span><br>
        <span style="color: #;"> <a style="color: #;" href="mailto:service@aogun.edu.com">service@aogun.edu.com</a></span><br>
        <span style="color: #;"><b>AOGUN Opportunities</b></span><br>
        <span style="color: #;"> <a style="color: #;" href="mailto:careers@aogun.edu.com">careers@aogun.edu.com</a></span></p>
      </div></td>


</tr>

</table>

</div><br>

<div id="footer">
  <?php
include "footer1.php";
  ?>
</div>



</body>
</html>
