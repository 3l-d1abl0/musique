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

			<div id="bmain">
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
				   <table width="920" height="950" >
				   <tr width="900">   
				   <td>
				   <?php
					$name=strtok($row[0]," ");
				    if($tn=='accessories')
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
				   <tr><td><center><a href="payment.php"><font face="verdana" color="black">Book</font></a></center></td></tr>
				   </table>
				</center>   
				
				
				
				
			</div>
			
			<div id="footer">
			<center>Copyright © 2013-2015 MUSiQUE, Inc and MUSiQUE, ND.<br> All Rights Reserved. 
			Payments are performed by Norton, ND.	<br>
			Privacy Policy | Report spam | Sitemap</center>
			</div>
		</div>
	</body>
</html>