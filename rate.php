
<?php
include("connection.php");
session_start();
?>


<html>
<head>
    <title>
        CricHub Official Website
    </title>
    <link href="css/rate.css" rel="stylesheet" type="text/css">
</head>
<style>
    table.cric {
  margin-left: 345px;
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
.div3 {
        text-align: center;
        font-size: 90%;
        color: white;
        width: 160px;
        height: 23px;
        border: 1px solid #a16408;
        background-color: black;
        border-radius: 0.35em;
        margin-left: 45px;
    }
  
</style>


<body background="images/cx1.jpg"> 
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
        </div>
        <br>
    </header>
        <a href="pro.html"> <button class="button1"><span>Logout </span></button></a>
        <br><br>
        
        
        <div class="text-block ">
                    <h4>BE A CRITIC</h4>
                    <p>Rate players. Rate Match. Rate Cricket</p>
                </div>
                <br><br>

        <div class ="heading">
        <div class="div1">  1. AB de Villiers
        </div>
        </div>
<br>

<p><img src="images/abd.jpg" style="width:170px;height:170px;margin-left:45px;"><br>
&nbsp;&nbsp;&nbsp; <b>Country: </b> South Africa <br>
&nbsp;&nbsp;&nbsp; <b>Playes For: </b> South Africa, RCB<br>
&nbsp;&nbsp;&nbsp; <b>Player Stats: </b> 
<table class ="cric" >
<tr>
    <th>Format</th>
    <th>Matches</th> 
    <th>Runs</th>
    <th>Avg.</th> 
    <th>HS</th>
  </tr>
  <tr>
    <td>Test</td>
    <td>114</td>
    <td>8765</td>
    <td>50.7</td>
    <td>278*</td>
  </tr>
  <tr>
    <td>ODI</td>
    <td>228</td>
    <td>9577</td>
    <td>53.5</td>
    <td>176</td>
  </tr>
  <tr>
   <td>T20I</td>
    <td>78</td>
    <td>1672</td>
    <td>26.1</td>
    <td>79*</td>
  </tr>
    <tr>
   <td>IPL</td>
    <td>154</td>
    <td>4395</td>
    <td>40.0</td>
    <td>133*</td>
  </tr>
</table>

</p>

<br>
<form action="" method="POST">
<div class="reer" > 
 
 Rate Player:</div>
 <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="pl" placeholder="Give Your Reivew About Player:" name="review" value="">
 <br><br>
 <h3 style ="margin-left:56px;"> 
 By:</h3>
 <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Enter your username:" name="usernam" value="">
 <br>
 <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit"/>

</form>


<?php
if(isset($_POST['submit']))
{
$re =$_POST['review'];
$user =$_POST['usernam'];

if($re!="" && $user!="" )
{
$query="INSERT INTO abdrate VALUES ('$re','$user')";
$data=mysqli_query($conn,$query);
if($data)
{
    echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reivew Saved";
}
}
else
{
    echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Fields are Required";
}
}

?>
<br>
<form method="post">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="bmit" value="View previous Reviews"/>
</form>
<br>


<?php
if(isset($_POST['bmit']))
{
$sql = "SELECT *  FROM abdrate ";
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
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class='div3'>Review By:-". $row["usernam"]. "</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class = 'div4'>". $row["review"]. "</div><br>
";
}
}
}

?>


<br><br>
<hr><hr>
        <br><br>

<div class ="heading">
    <div class="div1">
          2. MS Dhoni
        </div>
</div>
<br>

<p><img src="images/dc.jpg" style="width:170px;height:170px;margin-left:45px;"><br>
&nbsp;&nbsp;&nbsp; <b>Country: </b> India<br>
&nbsp;&nbsp;&nbsp; <b>Playes For: </b> India,CSK<br>
&nbsp;&nbsp;&nbsp; <b>Player Stats: </b> 
<table  class ="cric" >
<tr>
    <th>Format</th>
    <th>Matches</th> 
    <th>Runs</th>
    <th>Avg.</th> 
    <th>HS</th>
  </tr>
  <tr>
    <td>Test</td>
    <td>90</td>
    <td>4876</td>
    <td>38.1</td>
    <td>224</td>
  </tr>
  <tr>
    <td>ODI</td>
    <td>350</td>
    <td>10773</td>
    <td>50.6</td>
    <td>183*</td>
  </tr>
  <tr>
   <td>T20I</td>
    <td>98</td>
    <td>1617</td>
    <td>37.6</td>
    <td>56</td>
  </tr>
    <tr>
   <td>IPL</td>
    <td>190</td>
    <td>4432</td>
    <td>42.2</td>
    <td>84*</td>
  </tr>
</table>

</p>

<br>
<form action="" method="POST">
<div class="reer" > 
 Rate Player:</div>
 <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="pl" placeholder="Give Your Reivew About Player:" name="review" value="">
 <br><br>
 <h3 style ="margin-left:56px;"> 
 By:</h3>
 <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Enter your username:" name="usernam" value="">
 <br>
 <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="ubmit" value="Submit"/>

</form>



<?php
if(isset($_POST['ubmit']))
{
$rre =$_POST['review'];
$userr =$_POST['usernam'];

if($rre!="" && $userr!="" )
{
$query="INSERT INTO mahirate VALUES ('$rre','$userr')";
$data=mysqli_query($conn,$query);
if($data)
{
    echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reivew Saved";
}
}
else
{
    echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Fields are Required";
}
}

?>
<br>
<form method="post">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="it" value="View previous Reviews"/>
</form>
<br>


<?php
if(isset($_POST['it']))
{
$sql = "SELECT *  FROM mahirate ";
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class='div3'> Review By:-". $row["usernam"]. "</div> 
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["review"]. "</h3><br>
";
}
}
}

$conn->close();
?>














<hr><hr>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <br><br><br><br><br><br><br><br>
        
        
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