<?php
ob_start();
session_start();
include('connect.php');
if($_SESSION['name']!='admin')
header('Location:logout.php');
else
{
?>
<html>
<head>
	<title>Monthly report
	</title>
	<link rel="stylesheet" href="mystyle.css">
</head>
<body background="">
		<div id="wrap">
			<div id="bookheader">
			
				<div id="logo" class="hh">
				  
			      </div>  
				  
				  <div id="type" class="hh">
				  
			      </div>
				  
				  <div id="contact" class="hh">
				 <center><img src="cont1.jpg"></center>
			      </div>
				  </div>
		<div class="clear"></div>
		<div id="main">	
<?php
$query="SELECT EXTRACT(MONTH FROM bdate) as month,SUM(price) FROM orders GROUP BY month ORDER BY month";
$result=mysqli_query($con,$query);
if($result)
{
	echo '<center><h1>Monthly Report</h1>';
	echo '<table>';
	echo '<tr><td>Month</td><td>Sale</td></tr>';
	while($row=mysqli_fetch_array($result))
	{
		echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td></tr>';
	}
	echo '</table>
	<br><br>
	<table width="100%"><tr>
	<td><a href="welcome.php"><b><i>home</i></b></a></td>
	<td><p align ="right"><a href="logout.php"><b><i>Logout</i></b></a></p></td></tr>
	</table></div></div>';
}
}
?>