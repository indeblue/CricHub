<?php
include("connection.php");
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/ranking.css">
</head>
<style>
    .wrapper {
    line-height: 1.5em;
    margin: 0 auto;
    padding: 2em 0 3em;
    width: 90%;
    max-width: 2000px;
    overflow: hidden;
    margin-top: 15px;
}

    </style>

<body background="images/cx6.jpg">
    <div class=" nav-bar "><img class="logo " src="images/criclogo.jpg ">
        <ul class="menu ">
            <li><a href="crichub.html ">Home</a></li>
            <li><a href="fixtures.html ">Fixtures</a></li>
            <li><a href="ipl.html ">IPL</a></li>
            <li><a href="stats.php ">STATS</a></li>
            <li><a href="pro.html ">BE AN EXPERT</a></li>
            <li><a href="ranking.php ">Ranking</a></li>
            <li><a href="about1.html ">About US</a></li>
        </ul>
    </div><br>

    <div class="container">
        <header>
            <h1>ICC TOP 10 Test Ranking</h1>
        </header>
        <div class="wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Team</th>
                        <th>Points</th>

                    </tr>
                    <?php
$sql = "SELECT *  FROM testrank ";
$data=mysqli_query($conn,$sql);
$total=mysqli_num_rows($data);
// echo $total;
$result = $conn->query($sql);
// echo $result;
if ($result->num_rows > 0) {
// output data of each row

while($row = $result->fetch_assoc()) 
{
    echo"
    </thead>
    <tbody>
  <td class='rank'>". $row["rank"]. "</td>
  <td class='team'>". $row["team"]. "</td>
  <td class='points'>". $row["points"]."</td>
 
  </tr>
 


";

}

} 

?>

  </tbody>
  </table>
  </div>
  </div>
<br><br>




<div class="container">
        <header>
            <h1>ICC TOP 10 ODI Ranking</h1>
        </header>
        <div class="wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Team</th>
                        <th>Points</th>
                    </tr>
                    <?php
$sql = "SELECT *  FROM odirank ";
$data=mysqli_query($conn,$sql);
$total=mysqli_num_rows($data);
// echo $total;
$result = $conn->query($sql);
// echo $result;
if ($result->num_rows > 0) {
// output data of each row

while($row = $result->fetch_assoc()) 
{
    echo"
    </thead>
    <tbody>
  <td class='rank'>". $row["rank"]. "</td>
  <td class='team'>". $row["team"]. "</td>
  <td class='points'>". $row["points"]."</td>
 
  </tr>
 


";

}

} 
$conn->close();
?>

  </tbody>
  </table>
  </div>
  </div>
<br><br>


  
 


    
    <div class="footer ">
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