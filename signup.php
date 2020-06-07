

<?php
include("connection.php");
session_start();
?>


<html>

<head>
    <title>
        CricHub Official Website
    </title>
    <link href="css/crichubb.css" rel="stylesheet" type="text/css">
    <link href="css/signup.css" rel="stylesheet" type="text/css">
</head>


<body background ="images/virr.jpg">
    <header>
        <div class="nav-bar"><img class="logo" src="images/criclogo.jpg">
            <ul class="menu">
                <li><a href="crichub.html">Home</a></li>
                <li><a href="fixtures.html">Fixtures</a></li>
                <li><a href="ipl.html">IPL</a></li>
                <li><a href="stats.php">STATS</a></li>
                <li><a href="pro.html">BE AN EXPERT</a></li>
                <li><a href="ranking.html">Ranking</a></li>
                <li><a href="about1.html">About US</a></li>
        </div>
        </ul>
    </header>

    <div class="wrapper">
        <div class="title">
            Enter Your Details
        </div>
        <form action="" method="POST" >
        <div class="form">
            <div class="input_field">
              Username:  <input type="text" placeholder="UserName" name="username" value="">
            </div>
            <div class="input_field">
              Password: <input type="password" placeholder="password" name="password" value="">
            </div>
            <div class="input_field">
             Counrty:  <input type="text" placeholder="Country" name="country" value="">
            </div>
            <div class="input_field">
             Phone Number<input  type="text" placeholder="Phone Number" name="number" value="">
            
            </div>
            <input type="submit" name="submit" value="Submit"/>
            
        </div>
</form>

        <?php
if($_POST)
{
$user =$_POST['username'];
$pass =$_POST['password'];
$count=$_POST['country'];
$number =$_POST['number'];



if($user!="" && $pass!="" && $count!="" && $number!="")
{
$query="INSERT INTO userlogin VALUES ('$user','$pass')";
$data=mysqli_query($conn,$query);
if($data)
{
    echo"Data inserted into Database Go Back To Login";
}
}
else
{
    echo"All Fields are Required";
}
}
?>
<br><br>
</div>

    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
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
</body>

</html>




