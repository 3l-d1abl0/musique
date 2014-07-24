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
	</head>
<body>
<?php
$email=$_GET['id'];
$query="delete from user where email='$email'";
mysqli_query($con,$query);
header('Location: seeuser.php');
}
?>
</body>	
</html>