<?php
ob_start();
session_start();
include('connect.php');
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
	 </head>

	<body background="pback.jpg">
		<div id="wrap">
			<div id="pheader">
			
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
				<div id="side1" class="fl">
				
				<div id="dealership">
				<p align="center">Dealership Available<br></p><hr>
				<p align="center">
				<a href="http://www.fender.com/en-IN/" target="_blank">Fender Guitars</a><br>
				<a href="http://www2.gibson.com/Gibson.aspx" target="_blank">Gibson Guitars</a><br>
				<a href="http://wmshaynes.com/" target="_blank">Haynes Flutes</a><br>
				<a href="http://www.ludwig-drums.com/" target="_blank">Ludwig Drums</a><br>
				<a href="http://usa.yamaha.com/products/musical-instruments/keyboards/ " target="_blank">Yamaha piano</a><br>
				<a href="http://meinlpercussion.com/goto/PRO-TABLA" target="_blank">Meinl Tabla</a><br>
				<a href="http://www.cremonainc.com/" target="_blank">Cremona Violin</a>
				</p></div>
				
				<div id="sellers"><h2>Best Sellers</h2>
				<?php
				$query="select count(pid) as count,pname,category,ptype from orders group by  pid order by count desc";
				$result=mysqli_query($con,$query);
				$i=0;
				echo '<table>';
				while($row=mysqli_fetch_array($result))
				{
					if($i==3)
					break;
					else{	
					$name=strtok($row[1]," ");
					if($row[2]=='accessories')
					echo '<tr><td><img src="accessories/'.$row[3].'/'.$name.'.jpg" width="120" height="100"></td></tr>';
					else
					{
					$query1="select category from $row[3] where name='$row[1]'";
					$result1=mysqli_query($con,$query1);
					$row1=mysqli_fetch_array($result1);
					echo '<tr><td><img src="instrument/'.$row[3].'/'.$row1[0].'/'.$name.'.jpg" width="120" height="100"></td></tr>';
					$i++;
					}
					}
				}
				echo '</table>';
				?>
				</div>
				</div>
				
				<div id="contents" class="fl"><center><h1>Piano Info</h1></center>
				The piano is a musical instrument played by means of a keyboard. It is one of the most popular instruments in the world. Widely used in classicaland jazz music for solo performances, ensemble use, chamber music and accompaniment, the piano is also popular as a tool for composing andrehearsal. Although not portable and often expensive, the piano's versatility and ubiquity have made it one of the world's most familiar musical instruments.
Pressing a key on the piano's keyboard causes a padded (often with felt) hammer to strike steel strings. The hammers rebound, and the strings to continue to vibrate at their resonant frequency.[1] These vibrations are transmitted through a bridge to a sounding board that more efficiently couplesthe acoustic energy to the air.
A schematic depiction of the construction of a pianoforte<br>
<img src="pinfo.png" align="right" width="550">
frame (1)<br>
lid, front part (2)<br>
capo bar (3)<br>
damper (4)<br>
lid, back part (5)<br>
damper mechanism (6)<br>
sostenuto rail (7)<br>
pedal mechanism, rods (8, 9, 10)<br>
pedals: right (sustain/damper), middle (sostenuto), left (soft/una-corda) (11)<br>
bridge (12)<br>
hitch pin (13)<br>
frame (14)<br>
sound board (15)<br>
string (16)<br><br>	
Types<br><br>
1.	Grand<br>
2.	Upright<br>
3.	Digital Pianos<br>
4.	Electric Pianos<br>
Parts<br><br>
1.	Keyboards<br>
2.	Pedals (Standard Pedals)<br>
3.	Unusual Pedals<br><br>
Pianos need regular tuning to keep them on pitch, which is usually the internationally recognized 
standard concert pitch of A4 = 440 Hz. The hammers of pianos are voiced to compensate for gradual hardening, 
and other parts also need periodic regulation. Aged and worn pianos can be rebuilt or reconditioned. 
Often, by replacing a great number of their parts, they can perform as well as new pianos. Older pianos 
are often more settled and produce a warmer tone.[citation needed]<br><br> 
</div>
				<?php
				if(!isset($_POST['sub']))
				{
				?>
				<div id="side2" class="fl">
				      <div id="joinus"><a href="register.php"><center><br>Join Us</center></a></div>
				         <div id="login">
						 <br><br><center><font size="4" color="#f5f0ec">Login</font></center>
								<form name="form1" action="pianoinfo.php" method="post">
									<br>&nbsp;Email ID:<input  type="text" name="id" size="15">
									<br>&nbsp;Password:<input type="password" name="pwd" size="15"><br><br>
								<center><input type="submit" name="sub" value="submit"></center>
								</form>
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
			$email=$_POST['id'];
			$pass=$_POST['pwd'];
			$query="select pass from user where email='$email'";
			$result=mysqli_query($con,$query);
			if($result)
			{
				$row=mysqli_fetch_array($result);
				if($row[0]==$pass)
				{
					$_SESSION['name']='user';
					$_SESSION['id']=$email;
					header('Location: pianoinfo1.php');	
				}	
				else
				header('Location:pianoinfo.php');
			}
			else
			header('Location:pianoinfo.php');
		}
		?>	
	</body>
</html>