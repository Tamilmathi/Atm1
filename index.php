<?php 
include 'connection.php';
?>
<html>
<head>
<style>
.inputid{
width:330px;
height:40px;
background-color:white;
text-align:center;
}
.atm{
margin-top:150px;

}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script>
$(document).ready(function(){
$("#click").click(function(){
  	var data=$("#cardno").val();
$.ajax({
type:"post",
url:"card.php",
data :{data:data},
success:function(msg){
var info=msg;
$("#result").html(info);
if(info == "valid"){
$("#insert").submit();
}
else{
alert(info);
}
}
});
});
});
</script>
 
</head>

<body>
<div class="atm">
<div class="container">
  <form class="form-horizontal" role="form" id="insert" name="Form"  action="pass.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Enter Card number:</label>
      <div class="col-sm-10">
        <input type="text" name="num" class="form-control" id="cardno" placeholder="Enter card number"><span id="result"></span>
      </div>
    </div>
<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-default" onclick="" id="click">Submit</button>
	<input type="hidden" class="form-control" name="action" value="Submit">
      </div>
    </div>
<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-default" onclick="window.location.href='register.php'" id="click1">REGISTER</button>
	<input type="hidden" class="form-control" name="action" value="Register">
      </div>
    </div>
  </form>
</div>
</div>
<!--<form id="insert" name="Form"  action="pass.php" method="post">
<div id="atm">
<label><b>Enter Card Number:</b></label>
<label></label><input type="text" name="num" class="inputid" id="cardno"><span id="result"></span></input><br><br>
<input type="button" class="inputid" value="Submit" onclick="" id="click"></input>
<label></label><input type="hidden" name="action" value="Submit"><br><br>
<p>New User?</p><label></label><a href="register.php"><div class="inputid">REGISTER</div></a></input>
</div>
</form>-->
</body>
</html>

