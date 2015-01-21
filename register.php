<?php
ob_start();
session_start();
include('connect.php');
?>
<html>
	<head>
    <title>register</title>
		<link rel="stylesheet" href="style.css" type="text/css">
		<style>
			td{
			color:rgb(163,200,245);
			}
		</style>
        <script src="myjs.js" type="text/javascript">
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
				 <center><a href="contactus.php"><img src="cont1.jpg"></a></center>
			      </div>
				  
			</div>

			
			<div id="menu">
				<ul>
				   <li><a href="layout.php">Home</a></li>
				   <li><a href="#">Instruments</a>
						 <ul>
							<li><a href="guitar.php">Guitars</a></li>
							<li><a href="piano.php">Piano</a></li>
							<li><a href="drums.php">Drums</a></li>
							<li><a href="flute.php">Flute</a></li>
							<li><a href="violin.php">Violin</a></li>
							<li><a href="tabla.php">Tabla</a></li>
					  </ul>
				   
				   </li>
				     
				   <li><a href="#">Instrument Info</a>
				       <ul>
							<li><a href="guitarinfo.php">Guitars</a></li>
							<li><a href="pianoinfo.php">Piano</a></li>
							<li><a href="drumsinfo.php">Drums</a></li>
							<li><a href="fluteinfo.php">Flute</a></li>
							<li><a href="violininfo.php">Violin</a></li>
							<li><a href="tablainfo.php">Tabla</a></li>
					  </ul>
				   
				   </li>
				   <li><a href="accessories.php">Accessories</a></li>
				   <li><a href="#">Order</a>
				   <ul>
							<li><a href="guitar.php">Guitars</a></li>
							<li><a href="piano.php">Piano</a></li>
							<li><a href="drums.php">Drums</a></li>
							<li><a href="flute.php">Flute</a></li>
							<li><a href="violin.php">Violin</a></li>
							<li><a href="tabla.php">Tabla</a></li>
							<li><a href="accessories.php">Accessories</a></li>
					  </ul>
				   </li>
				   <li><a href="lessons.php">Lessons</a></li>
				   <li><a href="downloads.php">Downloads</a></li>
				   <li><a href="aboutus.php">About Us</a></li>
				</ul>
				<div class="clear"></div>
			</div>

			<div id="main">
            	<center>
                <form name="form1" action="register.php" method="post" onSubmit="return validateForm();" enctype="multipart/form-data">
                <table><br>
                 <br><br>
                <tr><td>*Name : </td><td><input type="text" name="name" size="30" onBlur="return validateForm1();"></td></tr>
                <tr><td>*Password : </td><td><input type="password" name="pass" size="30" onBlur="return validateForm2();"></td></tr>
                <tr><td>*Address : </td><td><textarea name="address" rows="3" cols="23" onBlur="return validateForm3();"></textarea></td></tr>
                <tr><td>*City : </td><td><input type="text" name="city" size="30" onBlur="return validateForm4();"></td></tr>
                <tr><td>*Gender : </td><td><select name="gender"><option value="male">Male</option><option value="female">Female</option></select></td></tr>
                <tr><td>*Phone : </td><td><input type="text" name="phone" size="30" onBlur="return validateForm6();"></td></tr>
                <tr><td>*Email : </td><td><input type="text" name="email" size="30" onBlur="return validateForm7();"></td></tr>
                <tr><td>*Pincode : </td><td><input type="text" name="pincode" size="30" onBlur="return validateForm5();"></td></tr>
                <tr><td>Interests : </td><td><textarea name="interest" rows="3" cols="23"></textarea></td></tr>
				<tr><td> Photo : </td><td><input type="file" name="file" size="30"></td></tr>
                <tr><td align="center" colspan="2"><br><input type="submit" name="sub" value="Register"></td></tr>     
				</table></form><font color="red" size="3"> *  These fields are compulsory <br>
				* Your photo must be of format jpg,jpeg,gif,png,JPG,PNG or GIF</font></center>
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
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$pincode=$_POST['pincode'];
	$interest=$_POST['interest'];
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
	$photo=$email.".".$extension;
	if(file_exists("photos/" . $photo))
	{ echo $photo. "already exists .";
	}
	else
	{
	 move_uploaded_file($_FILES["file"]["tmp_name"],"photos/".$photo);
	}
	}
}
else
{
	 $photo=$email.".JPG";
	 if($gender=='female')
	 $old='default/default_f.JPG';
	 else
	 $old='default/default_m.JPG';
	 $new='photos/'.$photo;
	 copy($old, $new);
}
	$query="insert into user values('$name','$pass','$address','$city','$gender','$phone','$email',$pincode,2,'$interest')";
	$result=mysqli_query($con,$query);
	if($result)
	{
	$_SESSION['id']=$email;
	$_SESSION['name']= 'user';
	header('Location: account.php');}
	else
	{
	echo 'registration not successful';
	echo '<a href="register.php">Click here to go back</a>';
	}
}
?>
	</body>
</html>