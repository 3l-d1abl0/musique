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
		<link rel="stylesheet" href="style.css">
	 </head>

	<body background="vback.jpg">
		<div id="wrap">
			<div id="vheader">
			
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
				
				<div id="contents" class="fl"><center><h1>Violin Info</h1>
				The violin is a string instrument, usually with four strings tuned in perfect fifths. It is the smallest, highest-pitched member of the violin family of string instruments, which also includes the viola and cello.
The violin is sometimes informally called a fiddle, regardless of the type of music played on it. The word violin comes from the Medieval Latin wordvitula, meaning stringed instrument;[1] this word is also believed to be the source of the Germanic "fiddle" The violin is played by musicians in a wide variety of musical genres, including Baroque music, classical, jazz, folk music, rock and roll, and Soft rock. The violin has come to be played in many non-Western music cultures all over the world.
A violin generally consists of a spruce top (the soundboard, also known as the top plate, table, or belly), maple ribs and back, two endblocks, a neck, a bridge, a soundpost, four strings, and various fittings, optionally including a chinrest, which may attach directly over, or to the left of, the tailpiece. A distinctive feature of a violin body is its hourglass-like shape and the arching of its top and back. The hourglass shape comprises two upper bouts, two lower bouts, and two concave C-bouts at the waist, providing clearance for the bow.
The voice of a violin depends on its shape, the wood it is made from, the graduation (the thickness profile)
 of both the top and back, and the varnish that coats its outside surface. The varnish and especially the wood
 continue to improve with age, making the fixed supply of old violins much sought-after.<img src="vinfo.jpg" align="right">
Accessories<br><br>
1.	Strings<br>
2.	Tuning<br>
3.	Bows<br>
4.	Case<br>
Electric violins have a magnetic or piezoelectric pickup that converts string vibration to an electric signal. A cable or transmitter sends the signal to an amplifier. Electric violins are usually constructed as such, but a pickup can be added to a conventional acoustic violin.
The rise of electronically created music in the 1980s saw a decline in their use, as synthesized string sections took 
their place. However, while the violin has very little usage in rock music, it has some history in progressive rock
 (e.g., Electric Light Orchestra, King Crimson, Kansas, Gentle Giant). The 1973 album Contaminazione by Italy's RDM
 plays violins off against synthesizers at its finale ("La grande fuga").<br><br>

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