<?php
ob_start();
session_start();
include('connect.php');
if(!$_SESSION['name']=='admin'&&'user')
header('Location: guitarinfo.php');
else
{
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
	 </head>

	<body background="guitar1.jpg">
		<div id="wrap">
			<div id="gheader">
			
				<div id="logo" class="hh">
				  <h1><font face="pristina"></font></h1>
			      </div>  
				  
				  <div id="type" class="hh">
				  <font face="pristina"></font>
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
				
				<div id="contents" class="fl"><h1><center>Guitar Info</h1>
				The guitar is a string instrument of the chordophone family constructed from wood and strung with either nylon or steel strings.<br>
				There are three main types of modern acoustic guitar: the classical guitar (nylon-string guitar), the steel-string acoustic guitar,<br>
				and the archtop guitar. The tone of an acoustic guitar is produced by the vibration of the strings, which is amplified by the body<br>
				of the guitar, which acts as a resonating chamber. The classical guitar is often played as a solo instrument using a comprehensive<br>
				fingerpicking technique.<br>
				Electric guitars have had a continuing profound influence on popular culture. Guitars are recognized as a primary instrument in<br>
				genres such as blues, bluegrass, country, flamenco, folk, jazz, jota, mariachi, metal, punk, reggae, rock, soul, and many forms of pop.<br>
				Parts of Guitar:<br><img src="ginfo.png" align="right">
				•	Headstock<br>
				•	Nut<br>
				•	Fretboards<br>
				•	Frets<br>
				•	Truss rod<br>
				•	 Inlays<br>
				•	 Neck<br>
				•	 heel<br>
				•	 String<br>
				•	Body<br>
				•	Pickups<br>
				•	Electronics<br>
				•	Lining Binding and Purfing<br>
				•	Bridge<br>
				•	Saddle<br>
				•	Pickguard<br>
				•	Whammy Bar<br>
				•	Guitar strap<br>
				Standard tuning has evolved to provide a good compromise between simple fingering for many chords and the ability<br>
				to play common scales with reasonable left-hand movement. There are also a variety of commonly used alternative tunings,<br>
				for example, the classes of open, regular, and dropped tunings.<br>
<br>
				Guitar accessories<br>
				•	Capatasto<br>
				•	Slides<br>
				•	Plectrum<br>
<br></div>
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