<?php
ob_start();
session_start();
include('connect.php');
if($_SESSION['name']!='admin')
header('Location:layout.php');
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

	<title>Add a Tip
	</title>
	<link rel="stylesheet" href="mystyle2.css">
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
 if(!isset($_POST['sub']))
 {
?>  <center>
	<br><br>
	<h1>Add Tips</h1><hr>
	<form name="form1" action="addtip.php" method="post">
	<table>
	<tr><td>
	<b>
	Tips :</td><td><textarea name="tip" rows="3" cols="20"></textarea>
    </b></td></tr>
	<tr><td>
	<b>
	Type :</td><td><input type="text" name="type">
    </b></td></tr>
	<tr><td>
	<b>
	Url :</td> <td><input type="text" name="url">
    </b></td></tr>
    </table>
	<p align="center"><input type="submit" name="sub" value="Add"></p>
	</form>
	<br><hr>
	<table width="100%"><tr>
	<td><a href="welcome.php"><b><i>home</i></b></a></td>
	<td><p align ="right"><a href="logout.php"><b><i>Logout</i></b></a></p></td></tr>
	</table></div></div>
<?php
	}
else 
{
	$tip=$_POST['tip'];
	$url=$_POST['url'];
	$type=$_POST['type'];
	$query="insert into tips(tips,type,url) values('$tip','$type','$url')";
	$result=mysqli_query($con,$query);
	if($result)
	header('Location: welcome.php');
	else
	echo 'error';
}	
}	
?>	
	</body>	
</html>