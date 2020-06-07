<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Mens Fixtures</title>
<link rel="stylesheet" href="css/men.css" type="text/css">

</head>
<body  background="images/test9.jpg" >
    
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
    </header>
    <centre> <b><p text-align="center"class="serif"> </p></b></centre>

          <br>
    <center>
    <p id="rcorners1"> Match Scheduele </p>
</center>
    <br><br>
<?php
$sql = "SELECT *  FROM mensf ";
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
<div class='cont'>
<div class='card'>  
<h4>". $row["matchno"]. "</h4><br>
<h2>". $row["matches"]. "</h2> 

<p class='title'>". $row["date"]. "</p><br>
  
  <p>". $row["venue"]."<p><br>
  </div>
  </div>

";
  
}
}
else { echo "0 results"; }
$conn->close();
?>
<br><br>
<center>
<a href='export.php'>
    <p id="rcorners1"> Download Fixtures </p>
</a> 
</center>
<br><br>
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
