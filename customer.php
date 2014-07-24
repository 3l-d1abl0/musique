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
$query="select * from orders";
$result=mysqli_query($con,$query);
if($result)
{	
	echo '<center><h1>Customer\'s Info</h1>
	<table>';
	echo '<tr><td>Product Name</td><td>Product Id</td><td>Customer Name</td><td>Type</td><td>Category</td><td>Price</td><td>Purchase Date</td><td>Email</td><td>Tutor</td></tr>';
	while($row=mysqli_fetch_array($result))
	{
		echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td><td>'.$row[7].'</td><td>'.$row[8].'</td></tr>';
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
</html>