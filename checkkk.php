<?php


include("connect.php");


$name=$_POST['name'];
$gen=$_POST['gen'];
$year=$_POST['yr'];


$sql="select amount, year from master where name='$name' and year >= $year and gen_code=$gen";

$qry=mysql_query($sql);



$y=array();
$x=array();
if($qry)
{
	
while($data=mysql_fetch_assoc($qry))
		
{
		
	$yr=$data['year'];
	$amt=$data['amount'];
  	$y=$yr;
	$x=$amt;
	echo $y;		

}

}




?>