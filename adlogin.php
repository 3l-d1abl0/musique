<?php
ob_start();
session_start();
include('connect.php');
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
	
	
	<title>Login</title>
	<link rel="stylesheet" href="style1.css">
	</head>
	<body background="n2.jpg">
		<div id="wrap">
			<div id="header">
			
				<div id="logo" class="hh">
				  <h1><font face="pristina"></font></h1>
			      </div>  
				  
				  <div id="type" class="hh">
				  <font face="pristina">	</font>
			      </div>
				  
				  <div id="contact" class="hh">
				 <center><a href="contactus1.php"><img src="cont1.jpg"></a></center>
			      </div>
				  
			</div>
			<div id="main">
				   <div id="side1" class="fl">
				   </div>
				   <?php
				if(!isset($_POST['sub']))
				{
				?>
				<div id="contents1" class="fl">
				<center>
				<form name="form1" method="post" action="adlogin.php">
				<table><br><br><br><br>
					<tr><td>Email Id : </td><td><input type="text" size="25" name="email"></td></tr>
					<tr><br><td>Password : </td><td><input type="password" size="25" name="pass"></td></tr>
					<tr><td colspan="2" align="center"><br><br><input type="submit" name="sub" value="Login"></td></tr>
				</table>
				</div>
				
					  </div>
			    </div>
			
			<div id="footer">
			<center>Copyright © 2013-2015 MUSiQUE, Inc and MUSiQUE, ND.<br> All Rights Reserved. 
			Payments are performed by Norton, ND.	<br>
			Privacy Policy | Report spam | Sitemap</center>
			</div>
		</div>
		<?php
		}
		else
		{
			$email=$_POST['email'];
			$pass=$_POST['pass'];
			$query="select pass,status from user where email='$email'";
			$result=mysqli_query($con,$query);
			if($result)
			{
				$row=mysqli_fetch_array($result);
				if($row[0]===$pass && $row[1]==1)
				{
					$_SESSION['id']=$email;
					$_SESSION['name']='admin';
					header('Location: welcome.php');
				}
				else
				header('Location: adlogin.php');
			}
			else
			header('Location: adlogin.php');
		}
		?>
	</body>
</html>