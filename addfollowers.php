<?php

session_start();

include 'dbconnection.php';

$username=$_POST['username'];

$query="select nfollowers from user where username='$username';";

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_row($result);

$nfollowers=$row[0];

if($_POST['flag']==1){
	
//increment follower of the user



//echo $nfollowers;

$nfollowers=$nfollowers+1;



}

else if($_POST['flag']==0){

 $nfollowers=$nfollowers-1;
	
}

$query1="update user set nfollowers='$nfollowers' where username='$username';";

echo $nfollowers;
mysqli_query($conn,$query1);


?>