<?php 
include 'connection.php';
$num=$_SESSION['num'];
$pin=$_SESSION['pin'];
$pin=md5($pin);
$_SESSION['pin1']=$_POST['pin1'];
$pin1=$_SESSION['pin1'];
$pin1=md5($pin1);
//echo $num,$pin,$pin1;
$data="UPDATE Transaction SET PinNo='$pin1' WHERE CardNo ='$num' AND PinNo= '$pin' ";
if(mysqli_query($connection,$data))
{
echo "success";
header('Location:insert.php');
}
else
die();
$result= mysqli_query($connection,"SELECT * FROM TRANSACTION where CardNo ='$num' AND PinNo= '$pin' ");
//echo $result;
/*$balance=$info['balance'];
echo $balance;
$deposit=$_POST['deposit'];
function deposit()
{
$balance = $balance + $deposit;
}
$data="UPDATE Transaction SET Balance='$balance' WHERE CardNo ='$num' AND PinNo= '$pin' ";
if(mysqli_query($connection,$data))
{
echo "success";
}
else
die();*/
?>
