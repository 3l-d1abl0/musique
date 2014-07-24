<?php
ob_start();
session_start();
include('connect.php');
if($_SESSION['name']!='admin')
header('Location: logout.php');
else
{
 if(!isset($_POST['sub']))
 header('Location: modifytip.php');
 else 
  {
  echo '<html>
  <head>
	<title>Update
	</title>
  </head>
  <body>
  ';
    $tips=$_SESSION['tip'];
	$tip=$_POST['tip'];
	$type=$_POST['type'];
	$url=$_POST['url'];
	$query="update tips set tips='$tip',type='$type',url='$url' where tips= '$tips'";
	echo $query;
	$result=mysqli_query($con,$query);
	if($result)
	header('Location: seetip.php');
   }
 }
?> 
</body>
</html>