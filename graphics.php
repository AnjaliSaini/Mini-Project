<?php


header("content-type: image/png");

include_once("phpMyGraph5.0.php");
$cfg['title']="example";
$cfg['width']= 500;
$cfg['height']= 250;


$data=array(
	1955 => 12,
	1945 => 25,
	1965 => 29);

$graph=new phpMyGraph();
$graph->parseHorizontalLineGraph($data,$cfg);

?>