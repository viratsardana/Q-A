<?php
  
  session_start();

  if(!isset($_SESSION['username'])){

    header('Location:index.php');  	 
  	 
  	}


?>

<!DOCTYPE html>
<html lang="en">


<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<style type="text/css">

body{
padding-top: 100px;	
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


</style>

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



</body>


</html>