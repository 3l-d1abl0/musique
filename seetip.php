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
$query="select * from tips";
$result=mysqli_query($con,$query);
if($result)
{
	echo '<center><h1>Tips</h1><hr><table width="1300">';
	echo '<tr><td>Tips</td><td>Type</td><td>URL</td><th colspan="2">Action</th></tr>';
	while($row=mysqli_fetch_array($result))
	{
		echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td>';
		echo '<td><a href="modifytip.php?tip='.$row[0].'&sub=submit">Modify</a></td>';
		echo '<td><a href="deletetip.php?tip='.$row[0].'&sub=submit">Delete</a></td></tr><br>';
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
	</body>
</html>