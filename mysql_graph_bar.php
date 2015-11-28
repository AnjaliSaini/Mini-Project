<?php
include("phpgraphlib.php");
$graph=new PHPGraphLib(550,350); 

$link = @mysql_connect('localhost', 'root', 'root')
   or die('Could not connect: ' . mysql_error());
     
mysql_select_db('mas') or die('Could not select database');
  
$dataArray=array();

$name=$_POST['name'];
$gen=$_POST['gen'];
$year=$_POST['yr'];



$sql="select amount, year from master where name='$name' and year >= $year and gen_code=$gen";


$qry=mysql_query($sql);




if ($qry) {
  while ($row = mysql_fetch_assoc($qry)) {
      $year=$row["year"];
      $amount=$row["amount"];
      //add to data areray
      $dataArray[$year]=$amount	;
  }
}
  
//configure graph
$graph->addData($dataArray);
$graph->setTitle("Sales by Group");
$graph->setGradient("lime", "green");
$graph->setBarOutlineColor("black");
$graph->createGraph();
?>