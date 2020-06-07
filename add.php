




<?php
include("connection.php");
error_reporting(0);
?>


<html>
    <head>
    <link href="css/crichubb.css" rel="stylesheet" type="text/css">
    <link href="css/stat.css" rel="stylesheet" type="text/css">
    <link href="css/addd.css" rel="stylesheet" type="text/css">
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
                <li><a href="ranking.html">Ranking</a></li>
                <li><a href="about1.html">About US</a></li>
                
            </ul>
        </div>
        <br>
        <br>
    </header>


    <a href="stats.php"> <button class="button1"><span>Logout </span></button></a>
    <div class="wrapper">
        <div class="title">
            Enter Player Details
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="form">
            <div class="input_field">
              First Nme:  <input type="text" placeholder="First Name" name="firstname" value="">
            </div>
            <div class="input_field">
              Last Nme: <input type="text" placeholder="Last Name" name="lastname" value="">
            </div>
            <div class="pl">
            <div class="input_field">
             About Player:<input class="pl" type="text" placeholder="Player Description" name="description" value="">
            </div>
            </div>
            <div class="input_field">
             Counrty:   <input type="text" placeholder="Country" name="country" value="">
            </div>
            <div class="input_field">
             Matches Played:<input type="text" placeholder="Matches Played" name="matches" value="">
            </div>
            <div class="input_field">
             Runs:   <input type="text" placeholder="Runs" name="runs" value="">
            </div>
            <div class="input_field">
               Avg.: <input type="text" placeholder="Average" name="avg" value="">
            </div>
            <div class="input_field">
              HS:  <input type="text" placeholder="Highest Score" name="highestscore" value="">
            </div>
            <div class="input_field">
            Add Image:<input type="file" placeholder="Add Image" name="uploadfile" value="">
            </div>
            <input type="submit" name="submit" value="Submit"/>
        </div>
        </form>

       


<?php
if($_POST['submit'])
{
$fn =$_POST['firstname'];
$ln =$_POST['lastname'];
$desc=$_POST['description'];
$country =$_POST['country'];
$ma =$_POST['matches'];
$rn =$_POST['runs'];
$avg =$_POST['avg'];
$hs =$_POST['highestscore'];
$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="student/".$filename;
move_uploaded_file($tempname,$folder);


if($fn!="" && $ln!="" && $desc!="" && $country!=""&& $ma!=""&& $rn!="" && $avg!=""&& $hs!="" && $filename!="")
{
$query="INSERT INTO PLAYERINFO VALUES ('$fn','$ln','$desc','$country','$ma','$rn','$avg','$hs','$folder')";
$data=mysqli_query($conn,$query);
if($data)
{
    echo"Data inserted into Database";
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
    </body>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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