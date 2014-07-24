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

	<title>Add a Tutor
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
?>
	<br><center>
	<h1>Add Tutor</h1><hr>
	<form name="form1" action="addtutor.php" method="post">
	<table>
	<tr><td>
	<b>
	Name :</td><td><input type="text" name="name" size="20">
    </b></td></tr>
	<tr><td>
	<b>
	Password :</td><td><input type="password" name="pass" size="20">
    </b></td></tr>
	<tr><td>
	<b>
	Address :</td><td><textarea name="address" rows="3" cols="20"></textarea>
    </b></td></tr>
	<tr><td>
	<b>
	City :</td><td><input type="text" name="city" size="20">
    </b></td></tr>
	<tr><td>
	<b>
	Instrument :</td><td><input type="text" name="instrument" size="20">
    </b></td></tr>
	<tr><td>
	<b>
	Gender :</td><td><select name="gender"><option value="male">Male</option><option value="female">Female</option></select>
    </b></td></tr>
	<tr><td>
	<b>
	Phone :</td><td><input type="text" name="phone" size="20">
    </b></td></tr>
	<tr><td>
	<b>
	Email :</td><td><input type="text" name="email" size="20">
    </b></td></tr>
	<tr><td>
	<b>
	Info :</td><td><textarea name="info" rows="3" cols="20"></textarea>
    </b></td></tr>
	<tr><td>
	<b>
	Fee :</td><td><input type="text" name="fee" size="20">
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
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$instrument=$_POST['instrument'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$info=$_POST['info'];
	$fee=$_POST['fee'];
	$query="insert into tutors values('$name','$pass','$address','$city','$instrument','$gender',$phone,'$email','$info',$fee)";
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