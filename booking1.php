<?php
ob_start();
session_start();
include('connect.php');
if(!$_SESSION['name']=='admin'&&'user')
header('Location: logout.php');
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

		<title>Booking</title>
		<link rel="stylesheet" href="style.css">
	 </head>

	<body background="n1.jpg">
		<div id="wrap">
			<div id="bookheader">
			
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
			 <div id="display" class="fl">
				<?php
				$name=$_GET['name'];
				$id=$_GET['id'];
				$tn=$_GET['tn'];
				$_SESSION['pid']=$id;
				$_SESSION['tn']=$tn;
				$query="select * from $tn where id=$id";
				$result=mysqli_query($con,$query);
				$row=mysqli_fetch_array($result);
				?>
				<center>
				   <table width="700" height="900" >
				   <tr width="900">   
				   <td>
				   <?php
					$name=strtok($row[0]," ");
				    if($tn==='accessories')
					{
						echo '<center>
						<img src="accessories/'.$row[3].'/'.$name.'.jpg" width="250" height="250"></center>
						<p align="center">'.$row[4].'</p>
						Price : Rs '.$row[2].'
						</td>
						</tr>';
					}
					else
					{
						echo '<center>
						<img src="instrument/'.$tn.'/'.$row[5].'/'.$name.'.jpg" width="250" height="250"></center>
						<p align="center">'.$row[2].'</p>
						Price : Rs '.$row[3].'
						</td>
						</tr>';
					}	
				   ?>
				   
				   <tr><td><center><font face="verdana" color="Black"><a href="payment1.php">Book</a></font></center></td></tr>
				   
				   </table>
				   
				</center>   
				
				
				
				
			</div>
			<div id="side2" class="fl">
			        <div id="joinus"><a href="logout.php"><center><br>Logout</center></a></div>
					<div id="account"><a href="account.php"><center><br>Your Account</center></a></div>
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
?>		
	</body>
</html>