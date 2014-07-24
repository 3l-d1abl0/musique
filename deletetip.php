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
$tip=$_GET['tip'];
$query="delete from tips where tips='$tip'";
mysqli_query($con,$query);
header('Location: seetip.php');
}
?>
</body>	
</html>