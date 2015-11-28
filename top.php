<html>
<head>
<title> Popular Name Search </title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</head>
<body>

<div class='container'>
	
	<div class='row'>
		<div class='col-md-12'> <a href='index.php'> <img src='images/header.jpg' height=200 width=1150x> </div>
		
	</div>
</div>


<div class='container'>


<?php


include("connect.php");



$year=$_POST['yr'];

$gen=$_POST['gen'];

$rank=$_POST['rank'];
?>

<h3> Top <?php echo $rank ?> Popular Names   </h3>

<table height=50% width=50% border>
<tr>
		  <td> Name </td> <td> Amount </td> <td> Year </td>
 <td> Gender </td></tr>

<?php
if($gen==3)
 {


$sql="SELECT distinct name, amount, year,gen_code 
FROM `master`
 WHERE year =$year
 ORDER BY amount DESC
 LIMIT 0 , $rank";




}
else
{
   $sql="SELECT distinct name, amount, year,gen_code 
FROM `master`
WHERE year =$year
 and gen_code=$gen ORDER BY amount DESC
 LIMIT 0 , $rank";




}   
$qry=mysql_query($sql);


if($qry) 

{
	
	while($data=mysql_fetch_array($qry))
		
{
		?>
 		
		
<tr>
		<td> 
<?php echo $data['name']; ?> </td>  <td> <?php echo $data['amount']; ?></td>  <td> <?php echo $data['year']; ?> </td> <td> <?php echo $data['gen_code']; ?>
 </td></tr>

<?php  }}?>
</table>
</div> </div></div>
 <div class='col-md-1
2'> </div>
</body>
</html>
     

