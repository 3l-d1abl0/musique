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
	
	
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="content-language" content="en" />

<meta name="Keywords" content="Musique, Music, Sameer Barha">
<meta name="Description" content="Sample project on a Music Shop">
<meta name="robots" content="index,follow">
<meta name="googlebot" content="index,follow">
<meta property="og:image" content="" />
<meta name="author" content="Sameer Barha">
<meta name="language" content="english">

	

<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="fb:admins" content="1530159092"/>
	
	
	
		<title>Confirm</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	<?php
	$id=$_GET['id'];
	$cat=$_GET['cat'];
	$status=$_GET['status'];
	$tn=$_GET['tn'];
	if($status == 1)
	$query="update $tn set status=2 where id=$id and category='$cat'";
	if($status == 2)
	$query="update $tn set status=1 where id=$id and category='$cat'";
	$result = mysqli_query($con,$query);
	if($result)
	{
	header('Location: seeproduct.php');
	}
	else
	echo 'error';
	}
	?>
	</body>
</html>