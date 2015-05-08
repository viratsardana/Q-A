flag=1;

function editAns(){

var save_answer=$("#sans").text();

alert(save_answer);

editableText=$('<textarea style="width:520px; height:400px;" id="answer_text"/>');

editableText.val(save_answer);

$("#sans").replaceWith(editableText);

$("#atg").remove();


$("#ownans").append('<button class="btn btn-primary" onclick="submit_answer()">Update Answer</button>');
	
}

function submit_answer(){
	

var answer=$('#answer_text').val()

$.post("update_answer_db.php",{ans:answer,ques_id:question_id},function(data){
	

	
$("#answer_text").remove();


$("#ownans").remove();
/*if(flag){
$("#line").remove();
flag=0;
}*/

$("#own-comment").remove();
$("#br-own-comment").remove();
$("#hr-own-ans").remove();
$("#own-comment-box").remove();

$(".col-sm-5").append('<div class="answer" id="ownans" style="width:500px;word-wrap:break-word;"><span id="sans">'+answer+'</span><a href="#" onclick="editAns()" id="atg">&nbsp;Edit</a></div><br id="br-own-comment"><a href="#" id="own-comment" onclick="displayCommentBox()">Comments</a><div id="own-comment-box" class="well"></div><hr id="hr-own-ans">');

	
});


	
}