<?php


session_start();

if(!isset($_SESSION['username'])){

    header('Location:index.php');  	 
  	 
}

$username=$_SESSION['username'];

$conn=mysqli_connect("localhost","virat","fuckup");

$select=mysqli_select_db($conn,"qa");

$query="select * from user where username='$username';";

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_array($result);

//echo $row['email'];
$_SESSION['email']=$row['email'];
$_SESSION['fname']=$row['fname'];
$_SESSION['uid']=$row['id'];
$_SESSION['nfollowers']=$row['nfollowers'];

//echo 'hello'.$_SESSION['nfollowers'];

//make directory for the user//
mkdir("pimage/".$_SESSION['uid']);
copy("images/default_profile.jpg",'pimage/'.$_SESSION['uid'].'/default.jpg');

?>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<style type="text/css">

#profile_image{

position: relative;
left: 35px;
	
}

#test{
//border:solid;	
}

#addimgbutton{
position: relative;
left: 55px;	
margin-top: 2px;
}

body{
padding-top: 100px;	
overflow-x: hidden;
overflow-y:scroll;
}

#nbar{
width: 80%;
margin-left: auto;
margin-right: auto;
//border:solid;	
}

#search{
width: 360px;	
} 

#addqbutton{
width:150px;	
}	

#upload{
display: none;	
}

#upload_link{
left:50px;
position: relative;	
}

#upload_submit{
position: relative;
top:30px;
left: -30px;	
display: none;
}

#profile_image{
position: relative;
left:-10px;	
}

/*#ppos{
position: relative;
left:35px;	
}*/

</style>

<script src="script/upload.js"></script>



</head>


<body>

<nav class="navbar navbar-default navbar-fixed-top" id="nbar">
  <div class="container-fluid" id="cont">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php" id="hbutton">Q&A</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" id="search">
          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>&nbsp;Search</button>
          <button type="submit" class="btn btn-primary" id="addqbutton"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;Add Question</button>        
        </div>       
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-bell"></span>&nbsp;Notifications<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php session_start(); echo $_SESSION['username']; ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>       
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="row">

<div class="col-md-2 col-md-offset-1" id="test">

<div id="profile_image">
<?php
session_start();

include 'dbconnection.php';

$username=$_SESSION['username'];

$query="select profileimg from user where username='$username';";

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_array($result);

$src=$row['profileimg'];
$src="pimage/".$_SESSION['uid']."/".$src;

//echo $src;

echo '<img src="'.$src.'"width="200px">';

//<img src="images/default_profile.jpg" width="130px" height="130px" id="disp_p_image">//

?>

</div>
<form id="uploadImage" action="upload_profile_image.php" method="POST" enctype="multipart/form-data">
<input type="file" id="upload" name="userfile"></input>
<a href="" id="upload_link">Add your photo</a>
<input type="submit" id="upload_submit"></input>
</form>
<hr>
<p id="ppos">asd</p>
<p>asd</p>
<p>asd</p>
<p>asd</p>
<p>asd</p>
<p>asd</p>
<p>asd</p>
</div>



<div class="col-md-5">
<h3><?php session_start(); echo ucwords($_SESSION['fname']); /*echo $_SESSION['uid'];*/ ?></h3>
<hr>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
<p>Your History Goes Here</p>
</div>

<div class="col-md-3">
<h3>This will display your interests</h3>
<br>
<p>Your Interests Go Here</p>
<p>Your Interests Go Here</p>
<p>Your Interests Go Here</p>
<p>Your Interests Go Here</p>
<p>Your Interests Go Here</p>
<p>Your Interests Go Here</p>
<p>Your Interests Go Here</p>
<p>Your Interests Go Here</p>
</div>

</div>

</body>


</html>