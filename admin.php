<?php
session_start();
include("connection.php");
?>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Login</title>

        <link rel="stylesheet" href="admin.css">
        <link href="css/crichubb.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

    <body>
    <header>
        <div class="nav-bar">
            <img class="logo" src="images/criclogo.jpg">

            <ul class="menu">
                <li><a href="crichub.html">Home</a></li>
                <li><a href="fixtures.html">Fixtures</a></li>
                <li><a href="ipl.html">IPL</a></li>
                <li><a href="stats.php">STATS</a></li>
                <li><a href="pro.html">BE AN EXPERT</a></li>
                <li><a href="ranking.php">Ranking</a></li>
                <li><a href="about1.html">About US</a></li>
            
            </ul>
        </div>
    </header>
        <style>
            body {
                background-image: url('test2.jpg');
                min-height: 380px;
                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }
            
            p.serif {
                border-radius: 15px;
                text-align: center;
                background: #11ab6b;
                font-family: "Comic Sans MS", cursive, sans-serif;
                font-size: 45;
                color: #000000;
            }
        </style>
        <br>
        <centre> <b><p class="serif">Admin Login</p></b>
        <br>
        <br>
        <br>
            <div id="container-login">
                <div id="title">
                    Login
                </div>

                <form action="" method="post">
                    <div class="input">
                        <div class="input-addon">
                            <i class="material-icons">face</i>
                        </div>
                        <input type="text" name="username" placeholder="Username" value="">
                    </div>

                    <div class="clearfix"></div>

                    <div class="input">
                        <div class="input-addon">
                            <i class="material-icons">vpn_key</i>
                        </div>
                        <input name="password" placeholder="Password" type="password" value="">
                    </div>
                    <br>
                    <br>

                    <div class="remember-me">
                        <input type="checkbox">
                        <span style="color: #DDD">Remember Me</span>
                    </div>
                    <br>
                    <br>
                    <input type="submit" name="submit" value="Log In" />
                </form>
                <?php
        if ($_POST)
{
    $user = $_POST['username'];
    $pwd  = $_POST['password'];
    $query ="SELECT *FROM admin  WHERE username ='$user' and password ='$pwd'";
    $data  = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total==1)
    {
        $_SESSION['user_name']=$user;
       // echo "fac";
         
        header('location:add.php');
    }
    
   
    else
    {
        echo "login failed";
    }

}
?>
            </div>
    </body>
<br><br><br>
    <div class="footer">
    <center> <b> <font color = "#ffff0f"> Follow us at:</b></font>
            <br>
            <br>
            <br>
            <img src="images/twitter.jpg" style="width:5%">
            <img src="images/facebook.jpg" style="width:5%">
            <img src="images/insta.jpg" style="width:5%">
        </center>
                </div>
    </html>