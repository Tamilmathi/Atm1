<?php 
include 'connection.php';
$num=$_SESSION['num'];
$pin=$_SESSION['pin'];
$pin=md5($pin);
//echo $num, $pin;
$result= mysqli_query($connection,"SELECT Balance FROM Transaction WHERE CardNo ='$num' AND PinNo= '$pin'");
$count=mysqli_num_rows($result);
//echo $count;
//echo "SELECT Balance FROM Transaction WHERE CardNo ='$num' AND PinNo= '$pin' ";
if(!empty($count))
{
while($info1=mysqli_fetch_array($result))
{
$value1=$info1['Balance'];
//echo $value1;
}
}
?>
<html>
<head>
<style>
#atm{
margin-top:150px;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div id="atm">
<div class="container">
  <form class="form-horizontal" role="form" id="move" name="Form"  action="action.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" >Available Balance:</label>
      <div class="col-sm-10">
        <input type="text" name="bal" class="form-control"  value="<?php echo $value1; ?>">
      </div>
    </div>
<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-default"  id="no" onclick="location.href = 'insert.php' ">OK</button>
      </div>
    </div>
  </form>
</div>
</div>

<!--<label>Available Balance:</label><input type="text" name=bal class="inputid" value="<?php echo $value1; ?>"></input><br><br>
<label></label><input type="button"  id="no" value="OK"  onclick="location.href = 'insert.php' "></button><br><br>
</div>-->
</body>
</html>
