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
	<title>Products
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
$query="select * from tutors";
$result=mysqli_query($con,$query);
if($result)
{
	echo '<center>Tutors list<hr><table width="700">';
	echo '<tr><td>Name</td><td>Password</td><td>Address</td><td>City</td><td>Instrument</td><td>Gender</td><td>Phone</td><td>Email</td><td>Info</td><td>Fees</td><td>Action</td></tr>';
	while($row=mysqli_fetch_array($result))
	{
		echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td>
		<td>'.$row[5].'</td><td>'.$row[6].'</td><td>'.$row[7].'</td><td>'.$row[8].'</td><td>'.$row[9].'</td>';
		echo '<td><a href="deletetutor.php?id='.$row[7].'&sub=submit">Delete</a></td></tr><br>';
	}
	echo '</table>
	<hr><br>
	<table width="100%"><tr>
	<td><a href="welcome.php"><b><i>home</i></b></a></td>
	<td><p align ="right"><a href="logout.php"><b><i>Logout</i></b></a></p></td></tr>
	</table></div></div>';
}
}
?>	
	</body>
</html>