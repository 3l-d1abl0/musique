<?php
ob_start();
session_start();
include('connect.php');
if(!$_SESSION['name']=='admin'&&'user')
	header('Location: layout.php');
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
	
	
    <title>Account</title>
		<link rel="stylesheet" href="style1.css" type="text/css">
        </script>
	 </head>
<?php
if(!isset($_POST['sub']))
{
?>
	<body background="n1.jpg">
		<div id="wrap">
			<div id="regheader">
			
				<div id="logo" class="hh">
				  
			      </div>  
				  
				  <div id="type" class="hh">
				  
			      </div>
				  
				  <div id="contact" class="hh">
				 <center><a href="contactus1.php"><img src="cont1.jpg"></a></center>
			      </div>
				  
			</div>

			
			<div id="menu">
				<ul>
				   <li><a href="layout1.php">Home</a></li>
				   <li><a href="#">Instruments</a>
						 <ul>
							<li><a href="guitar1.php">Guitars</a></li>
							<li><a href="piano1.php">Piano</a></li>
							<li><a href="drums1.php">Drums</a></li>
							<li><a href="flute1.php">Flute</a></li>
							<li><a href="violin1.php">Violin</a></li>
							<li><a href="tabla1.php">Tabla</a></li>
					  </ul>
				   
				   </li>
				     
				   <li><a href="#">Instrument Info</a>
				       <ul>
							<li><a href="guitarinfo1.php">Guitars</a></li>
							<li><a href="pianoinfo1.php">Piano</a></li>
							<li><a href="drumsinfo1.php">Drums</a></li>
							<li><a href="fluteinfo1.php">Flute</a></li>
							<li><a href="violininfo1.php">Violin</a></li>
							<li><a href="tablainfo1.php">Tabla</a></li>
					  </ul>
				   
				   </li>
				   <li><a href="accessories1.php">Accessories</a></li>
				   <li><a href="#">Order</a>
				   <ul>
							<li><a href="guitar1.php">Guitars</a></li>
							<li><a href="piano1.php">Piano</a></li>
							<li><a href="drums1.php">Drums</a></li>
							<li><a href="flute1.php">Flute</a></li>
							<li><a href="violin1.php">Violin</a></li>
							<li><a href="tabla1.php">Tabla</a></li>
							<li><a href="accessories1.php">Accessories</a></li>
					  </ul>
				   </li>
				   <li><a href="lessons1.php">Lessons</a></li>
				   <li><a href="downloads1.php">Downloads</a></li>
				   <li><a href="aboutus1.php">About Us</a></li>
				</ul>
				<div class="clear"></div>
			</div>

			<div id="main">
				<?php
				$email=$_SESSION['id'];
				echo 
				'<div id="side1" class="fl">
				
				          <div id="inside3"><img src = "photos/'.$email.'.jpg" height="160" width="140"></div>
						  <div id="follow"><a href="logout.php"><br><br><br><center><b>Logout</b></center></a></div>
				</div>';
				$query="select * from user where email='$email'";
				$result=mysqli_query($con,$query);
				if($result)
				$row=mysqli_fetch_array($result);
                echo 
            	'<center>
                <table><br>
                 <br><br>
                <tr><td>Name : </td><td>'.$row[0].'</td></tr>
                <tr><td>Password : </td><td>'.$row[1].'</td></tr>
                <tr><td>Address : </td><td>'.$row[2].'</td></tr>
                <tr><td>City : </td><td>'.$row[3].'</td></tr>
                <tr><td>Gender : </td><td>'.$row[4].'</td></tr>
                <tr><td>Phone : </td><td>'.$row[5].'</td></tr>
                <tr><td>Email : </td><td>'.$row[6].'</td></tr>
                <tr><td>Pincode : </td><td>'.$row[7].'</td></tr>
                <tr><td>Interests : </td><td>'.$row[9].'</td></tr>
				<form name="form1" action="account.php" method="post" enctype="multipart/form-data">
				<tr><td> Photo : </td><td><input type="file" name="file" size="30"></td></tr>
                <tr><td align="center" colspan="2"><input type="submit" name="sub" value="Submit"></td></tr>     
				<tr><td><font color="red" size="3">
				* Your photo must be of format jpg</font></form></td></tr></center></table>';
				?>
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
	$email=$_SESSION['id'];
	$allowedExts=array("jpg","jpeg","gif","png","JPG","PNG","GIF");
	$endfile=explode(".",$_FILES["file"]["name"]);
	$extension=end($endfile);
	if((($_FILES["file"]["type"]=="image/gif")
	||($_FILES["file"]["type"]=="image/jpeg")
	||($_FILES["file"]["type"]=="image/png")
	||($_FILES["file"]["type"]=="image/JPG")
	||($_FILES["file"]["type"]=="image/PNG")
	||($_FILES["file"]["type"]=="image/GIF")
	||($_FILES["file"]["type"]=="image/pjpeg"))
	&&($_FILES["file"]["size"]<600000)
	&& in_array($extension,$allowedExts))
	{
	if($_FILES["file"]["error"]>0)
	{ 
	echo "return code :" . $_FILES["file"]["error"]. "<br />";
	}
	else
	{
	$photo=$email.".jpg";
	if(file_exists("photos/" . $photo))
	{ 
		$loc='photos/'.$photo;
		unlink($loc);
		move_uploaded_file($_FILES["file"]["tmp_name"],"photos/".$photo);
		header('Location: account.php');
	}
	else
	{
	 move_uploaded_file($_FILES["file"]["tmp_name"],"photos/".$photo);
	 header('Location: account.php');
	}
	}
}
}
}
?>
	</body>
</html>