<?php
session_start();

    include("connection.php");
    include("sfunction.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_id = $_POST['student_id'];
        $password = $_POST['password'];

        if(!empty($user_id) && !empty($password))
        {

            //read from database
            $query = "select * from students where student_id = '$user_id' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {

                        $_SESSION['user_id'] = $user_data['student_id'];
                        header("Location: students.php");
                        die;
                    }
                }
            }
            
            echo "wrong student_id or password!";
        }else
        {
            echo "wrong student_id or password!";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Students Log In</title>
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

        background-color:  #f2c4ba ;
        margin: auto;
        width: 300px;
        padding: 20px;
    }

    </style>



    <div id="box">
        
        <form method="post">
            <div style="font-size: 20px;margin: 10px;color: white;">Login</div>

            <p><label for="inp1">Roll</label>
    <input type="number" name="student_id" id="inp1" value="<?=$oldinp1 ?>"></p>
    <p><label for="inp2">Password</label>
    <input type="password" name="password" id="inp2"></p>
    
            <input id="button" type="submit" value="Login"><br><br>

        </form>
    </div>



     <?php
include "footer1.php";
    ?>
    
</body>
</html>