<?php
session_start();

    include("connection.php");
    include("adfunction.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_id = $_POST['admin_id'];
        $password = $_POST['password'];

        if(!empty($user_id) && !empty($password))
        {

            //read from database
            $query = "select * from admin where admin_id = '$user_id' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] === $password)
                    {

                        $_SESSION['user_id'] = $user_data['admin_id'];
                        setcookie("name","leaders",time()+120);
                        header("Location: admin.php");
                        die;
                    }
                }
            }

            include "js/incorrect.js";
        }else
        {
            include "js/incorrect.js";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Log In</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/table.css" />
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

    </style>



    <div id="box">

        <form method="post" class="login">
            <div style="font-size: 20px;margin: 10px;color: white;">Admin Login</div>

            <p><label for="inp1">Admin ID:</label>
    <input type="number" name="admin_id" id="inp1" value="<?=$oldinp1 ?>"></p>
    <p><label for="inp2">Password:</label>
    <input type="password" name="password" id="inp2"></p>

            <input id="button" type="submit" value="Login"><br><br>

        </form>
    </div>



     <?php
include "footer1.php";
    ?>

</body>
</html>
