<?php
session_start();
$con=mysql_connect('localhost','root','root');
$db=mysql_select_db('kabadi');

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$comp=$_POST['comp'];
$cpass=$_POST['cpass'];
$add=$_POST['add'];
$mob=$_POST['mob'];

if($pass!=$cpass)
{
 	header('location: sign_up.php?msg=password mismatch');
}

	
	
$query= "INSERT INTO login SET name='$name', company_name='$comp', email='$email', password='$pass', mob='$mob', addr='$add' ";

$insert=mysql_query($query);

if($insert)
{
	
	$_SESSION['ema']=$email;
	echo "<script> window.open('welcome.php');  </script>";
}
else{
	echo "error";
}



?>
