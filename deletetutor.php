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
$query="delete from tutors where email='$email'";
mysqli_query($con,$query);
header('Location: seetutor.php');
}
?>
</body>	
</html>