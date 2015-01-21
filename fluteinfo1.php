<?php
ob_start();
session_start();
include('connect.php');
if(!$_SESSION['name']=='admin'&&'user')
header('Location: fluteinfo.php');
else
{
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
	 </head>

	<body background="fback.jpg">
		<div id="wrap">
			<div id="fheader">
			
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
				
				<div id="sellers"><h1>Best Sellers</h1>
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
					echo '<tr><td><img src="accessories/'.$row[3].'/'.$name.'.jpg" width="150" height="100"></td></tr>';
					else
					{
					$query1="select category from $row[3] where name='$row[1]'";
					$result1=mysqli_query($con,$query1);
					$row1=mysqli_fetch_array($result1);
					echo '<tr><td><img src="instrument/'.$row[3].'/'.$row1[0].'/'.$name.'.jpg" width="150" height="100"></td></tr>';
					$i++;
					}
					}
				}
				echo '</table>';
				?>
				</div>
				</div>
				
				<div id="contents" class="fl"><center><h1>Flute Info</h1>
				The flute is a musical instrument of the woodwind family. Unlike woodwind instruments with reeds, a flute is an aerophone or reedless wind instrument that produces its sound from the flow of air across an opening. According to the instrument classification ofHornbostel-Sachs, flutes are categorized as edge-blown aerophones.
A flute produces sound when a stream of air directed across a hole in the instrument creates a vibration of air at the hole.
The air stream across this hole creates a Bernoulli, or siphon. This excites the air contained in the usually cylindrical resonant cavity within the flute. The player changes the pitch of the sound produced by opening and closing holes in the body of the instrument, thus changing the effective length of theresonator and its corresponding resonant frequency. By varying the air pressure, a flute player can also change the pitch of a note by causing the air in the flute to resonate at a harmonic rather than the fundamental frequency without opening or closing any holes.
To be louder, a flute must use a larger resonator, a larger air stream, or increased air stream velocity. A flute's volume can generally be increased by making its resonator and tone holes larger. This is why a police whistle, a form of flute, is very wide for its pitch, and why a pipe organ can be far louder than a concert flute: a large organ pipe can contain several cubic feet of air, and its tone hole may be several inches wide, while a concert flute's air stream measures a fraction of an inch across.
The air stream must be directed at the correct angle and velocity, or else the air in the flute will not vibrate. In fippled or ducted flutes, a precisely formed and placed windway will compress and channel the air to the labium ramp edge across the open window. In the pipe organ, this air is supplied by a regulated blower.
Categories of flute <br> <img src="finfo.jpg" align="right">
1. Western concert flutes <br>
2. Indian flutes <br>
3. Chinese flutes<br>
4. Japanese flutes<br>
5. Sodina and suling<br><br>

				</div>
				<div id="side2" class="fl">
				<div id="joinus"><a href="logout.php"><center><br>Logout</center></a></div>
				<div id="account"><a href="account.php"><center><br>Your Account</center></a></div>
				<div id="sale">
						<center><font size="4">
						<br><br><b>Sale</b><br>
						</font>
						5% Off on every Guitar<br>
						6% Off on every Piano
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
?>	
	</body>
</html>