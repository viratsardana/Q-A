<?php

include 'header.php';

?>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<script src="script/display_ques.js"></script>

<script>

function post_question(){

//alert('hello');	

var answer=document.getElementById("answer_text").value;


//alert(question_id);
//alert(answer);

$.post("add_answer_db.php",{ans:answer,ques_id:question_id},function(data){
	

alert(data);

$("#answer_text").val('');	

$(".col-md-5").append('<p><?php 

echo 'username goes here'; 


?>
</p>'+'<hr>'+answer);
	
});


	
}

</script>

<style type="text/css">
/*
#answer_area{
width: 460px;	
height: 80px;
}

#answer_text{
height: 50px;
position: relative;
top: -7px; 
left: -8px;
}*/

</style>

</head>


<body>

<div class="row">

<div class="col-md-3">

</div>

<div class="col-md-5">
<h4><span id="question_text"></span></h4>
<hr>


<div class="well" id="answer_area">
<hr>
<textarea cols="50" rows="3" placeholder="Write your Answer" id="answer_text"></textarea>
<hr>
<button type="button" class="btn btn-primary" onclick="post_question()">Post Answer</button>

</div>

<hr>

<?php

session_start();

$str=$_SERVER['QUERY_STRING'];

$quesid=substr(strrchr($str,"?"),1);

//echo $quesid;

include 'dbconnection.php';

$query="select ans from answers where question_id='$quesid';";

$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_row($result)){

echo $row[0].'<hr>';
	
}

?>

</div>

</div>

</body>


</html>

