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
	<title>Accessories
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
		echo '<h1><center>Accessories</h1><hr>';
			$query="select * from accessories";
			$result=mysqli_query($con,$query);
			if($result)
			{
			echo '<center><table width="1000"><tr><td>Name</td><td>Id</td><td>Price</td><td>Type</td><td>Details</td><td width="150">Image</td><td>Action</td></tr>';
			while($row=mysqli_fetch_array($result))
			{
				$name=strtok($row[0]," ");
				echo 
				'<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td><img src="accessories/'.$row[3].'/'.$name.'.jpg" width="100" height="100"></td>';
				echo '<td><a href="deleteaccessories.php?id='.$row[1].'&type='.$row[3].'&sub=submit">Delete</a></td></tr><br>';
			}
			echo '</table>';
			}		
	echo '<hr><br>
	<table width="100%"><tr>
	<td><a href="welcome.php"><b><i>home</i></b></a></td>
	<td><p align ="right"><a href="logout.php"><b><i>Logout</i></b></a></p></td></tr>
	</table></div></div>';
}	
	?>
	</body>
</html>