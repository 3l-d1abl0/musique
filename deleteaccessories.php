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
		$id=$_GET['id'];
		$type=$_GET['type'];
		$query="delete from accessories where id=$id and type='$type'";
		mysqli_query($con,$query);
		header('Location: seeaccessories.php');
		}
		?>
	</body>
</html>