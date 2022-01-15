<?php
session_start();
    include("sconnection.php");
    include("sfunction.php");




?>

<!DOCTYPE html>
<html>
<head>
    <title>Students Sign Up</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
include "header1.php";
    ?>
    <style type="text/css">
    
    #text{

        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button{

        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }

    #box{

        background-color:  #70e2f0  ;
        margin: auto;
        width: 300px;
        padding: 20px;
    }

    </style>



    <div id="box">
        
        <form method="post">
            <div style="font-size: 20px;margin: 10px;color: white;">SignUp</div>

            <input id="text" type="text" name="user_name"><br><br>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Signup"><br><br>

            <a href="slogin.php">Click to Log In</a><br><br>
        </form>
    </div>



     <?php
include "footer1.php";
    ?>
    
</body>
</html>