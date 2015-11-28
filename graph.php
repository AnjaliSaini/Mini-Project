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


<table border width=50% height=50%>
<tr>
<td> Year </td> <td> Amount  </td> </tr>

<?php





include("connect.php");




$name=$_POST['name'];
$gen=$_POST['gen'];
$year=$_POST['yr'];



$sql="select amount, year from master where name='$name' and year >= $year and gen_code=$gen";


$qry=mysql_query($sql);





if($qry)
{
	
while ($row = mysql_fetch_assoc($qry)) {
     $year=$row["year"];
      $amount=$row["amount"];
      //add to data areray
     
  	
	?> <tr> <td> <?php echo $year;  ?> </td> <td> <?php  echo $amount ?> </td> </tr>
<?php 
}

}








?>

 