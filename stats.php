<?php
session_start();
include("connection.php");
//collect

?>
    <html>

    <head>
        <title>
            CricHub Official Website
        </title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/crichubb.css" rel="stylesheet" type="text/css">
        <link href="css/statss.css" rel="stylesheet" type="text/css" >
        <link href="css/stat.css" rel="stylesheet" type="text/css" >
    </head>

    <body background="images/test4.jpg">
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
            <br>
            <br>
            <style>
      
                </style>
            <a href="admin.php"> <button class="button1"><span>Admin Login </span></button>
            </a>
            <div id="container-login">
                <div id="title">
                    Search Your Player
                </div>

                <form action=" " method="POST">
                    <div class="input">
                        <div class="input-addon">
                            <i class="material-icons">face</i>
                        </div>
                        <input type="text" name="firstname" placeholder="PlayerName" value="">
                    </div>

                    <div class="clearfix"></div>


                    <br>
                    <br>

                    <br>
                    <br>
                    <input type="submit" name="submit" value="Search" />
                </form>
                <?php
                
        if ($_POST)
{
   
    $fname  = $_POST['firstname'];
    $query ="SELECT lastname FROM playerinfo WHERE firstname ='$fname'";
    $data  = mysqli_query($conn, $query);
    $rt=mysqli_fetch_assoc($data);
    // var_dump($rt);
    // echo $fname;
    if($rt==null)
    {
        echo "Data not found ";
    }
    else{
        $_SESSION['fname']=$fname;
        header('location:test.php');
    }
 //   $total = mysqli_num_rows($data);
   // if($total==1)
   // {
    //    $_SESSION['fname']=$fname;
       // echo "fac";
         
     //   header('location:test.php');
   // }
    
    
   // else
   // {
    //    echo "Data Not Found";
   // }

}
?>     </div>


        <br>
        <br>
        <br>
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
    </body>

    </html>
   




