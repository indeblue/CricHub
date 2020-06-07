<?php
include("connection.php");
session_start();
$fname=$_SESSION['fname'];

?>
<!DOCTYPE html>
<html>
<head>
<title>Show Result</title>
<link rel="stylesheet" href="css/test1.css" type="text/css">
<style>
    #cont {
    background-color: white;
    max-width: 300px;
    margin: auto;
}
     table.cric {
  margin-left: 525px;
  ;
}
    
.cric {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;

    width: 3%;
    
}

.cric td,
.cric th {
    border: 1px solid #ddd;
    padding: 8px;
}

.cric tr:nth-child(even) {
    background-color: #f2f2f2;
}

.cric tr:hover {
    background-color: #ddd;
}

.cric th {
    padding-top: 3px;
    padding-bottom: 3px;
    text-align: left;
    background-color: #0084ff;
    color: white;
}
    </style>

</head>
<body background="images/cx1.jpg">
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
   


    <br><br><br><br>
<table class="cric">
<tr>
<!--<th>name</th>
<th>full name</th>
<th>country</th>
<th>desc</th>-->
<th>Matches</th>
<th>Runs</th>
<th>Avg</th>
<th>HighestScore</th>
</tr>
<?php
$sql = "SELECT *  FROM playerinfo where firstname like '$fname'";
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
    <div id='cont'>
    <div id='card'>

    <div id='te'>Player Profile</div>
    <br>

<img src='". $row["imagesource"]."' height='200' width ='200'/>
<br><br>
  <h3>First Name :          "      . $row["firstname"]. "<br>
  Last Name :  "                                . $row["lastname"] . "<br>
  </h3>
  <p id='title'>Country :   "                                   . $row["country"] ."<br></p><br>
  <div id='texty'>Player Statistics :-</div><tr><td>". $row["matches"]. "</td>
  <td>". $row["runs"]. "</td>
  <td>". $row["avg"]. "</td>
  <td>". $row["highestscore"]."</td></div>
  </div>
  </tr>
  </table>
  
  <div id ='about'> About Player</div><br>
 <div id='desc'>    ". $row["description"] . "<br></div><br>
 <hr><br>
  <p><div id='but'><a href='stats.php'><button >Search Other Player</button></p></a></div> 
  
 
<br><br>

";
break;  
}

} else { header('location:he.php'); }
$conn->close();
?>

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









 


