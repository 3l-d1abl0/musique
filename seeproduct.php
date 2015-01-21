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
				 <center><a href="contactus.php"><img src="cont1.jpg"></a></center>
			      </div>
				  </div>
		<div class="clear"></div>
		<div id="main">	
	<?php
	$instrument=array('drum','flute','guitar','piano','tabla','violin');
	for($i=0;$i<count($instrument);$i++)
	{
		echo '<h1><center>'.$instrument[$i].'</h1></center><hr>';
		$category=array('New','Used','Vintage');
		for($j=0;$j<count($category);$j++)
		{	echo '<h1>'.$category[$j].'</h1>';
			$query="select * from $instrument[$i] where category='$category[$j]'";
			$result=mysqli_query($con,$query);
			if($result)
			{
			echo '<table width="1400"><tr><td>Product Name</td><td>Product Id</td><td width="">Details</td><td>Price</td><td>Quantity</td><td width="150">Image</td><td>Status</td><td>Action</td></tr>';
			while($row=mysqli_fetch_array($result))
			{
				$name=strtok($row[0]," ");
				echo 
				'<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td><img src="instrument/'.$instrument[$i].'/'.$category[$j].'/'.$name.'.jpg" width="100" height="100"></td>
				<td><a href="confirmproduct.php?id='.$row[1].'&cat='.$row[5].'&status='.$row[6].'&tn='.$instrument[$i].'&sub=Change%20status">';
				if($row[6] == 1) echo 'Confirm</a></td>';
				if($row[6] == 2) echo 'Uncorfirm</a></td>';	
				echo '<td><a href="deleteproduct.php?id='.$row[1].'&cat='.$row[5].'&tn='.$instrument[$i].'&sub=submit">Delete</a></td></tr><br>';
			}
			echo '</table>';
			}
				else{   echo'Query Or Connection Problem...!!!!!';  }    
		}
		echo '<hr>';	
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