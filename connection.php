<?php

$servaername="localhost";
$username="root";
$password="";
$dbname="cricket";

$conn = mysqli_connect($servaername,$username,$password,$dbname);

if($conn)
{
    echo " ";
}
 else 
 {
     die("connection failed beacause".mysqli_connect_error());

 }

?>