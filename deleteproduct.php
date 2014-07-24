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
	

	
	
	
		<title>Delete
		</title>
	</head>
	<body>
		<?php
		$name=$_GET['name'];
		$id=$_GET['id'];
		$cat=$_GET['cat'];
		$tn=$_GET['tn'];
		$query="delete from $tn where id=$id and category='$cat'";
		mysqli_query($con,$query);
		header('Location: seeproduct.php');
		}
		?>
	</body>
</html>