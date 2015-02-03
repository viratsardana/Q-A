<?php

include 'header.php';

session_start();

$username=$_SESSION['username'];

$conn=mysqli_connect("localhost","virat","fuckup");

$select=mysqli_select_db($conn,"qa");

$query="select * from user where username='$username';";

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_array($result);

//echo $row['email'];
$_SESSION['email']=$row['email'];
$_SESSION['fname']=$row['fname'];

//echo $_SESSION['fname'];

?>