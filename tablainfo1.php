<?php
ob_start();
session_start();
include('connect.php');
if(!$_SESSION['name']=='admin'&&'user')
header('Location: tablainfo.php');
else
{
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
	 </head>

	<body background="tback.jpg">
		<div id="wrap">
			<div id="theader">
			
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
				
				<div id="contents" class="fl"><center><h1>Tabla Info</h1>
				The tabla (or tabl, tabla) is a membranophone percussion instrument (similar to bongos), used in 
				Hindustani classical music and in popular and devotional music of the Indian subcontinent. The instrument
				consists of a pair of hand drums of contrasting sizes and timbres. The term tabla is derived from an Arabic
				word, tabl, which simply means "drum." The tabla is used in some other Asian musical traditions outside
				of India, such as in the Indonesian dangdut genre.
Playing technique involves extensive use of the fingers and palms in various configurations to create a wide variety
 of different sounds, reflected in the mnemonic syllables (bol). The heel of the hand is used to apply pressure or in a 
 sliding motion on the larger drum so that the pitch is changed during the sound's decay.<br><br>
Nomenclature and construction <img src="tinfo.jpg" align="right"><br>
The smaller drum, played with the dominant hand, is sometimes called dayan (literally "right"), dahina, siddha
 or chattu, but is correctly called the "tabla." It is made from a conical piece of mostlyteak and rosewood 
 hollowed out to approximately half of its total depth. The drum is tuned to a specific note, usually either 
 the tonic, dominant or subdominant of the soloist's key and thus complements the melody. The tuning range is
 limited although different dayan-s are produced in different sizes, each with a different range. Cylindrical
 wood blocks, known as ghatta, are inserted between the strap and the shell allowing tension to be adjusted by
 their vertical positioning. Fine tuning is achieved while striking vertically on the braided portion of the head using a small hammer.
The larger drum, played with the other hand, is called bayan (literally "left") or sometimes dagga, duggi or 
dhama. The bayan has a much deeper bass tone, much like its distant cousin, the kettle drum. The bayan may be made
 of any of a number of materials. Brass is the most common, copper is more expensive, but generally held to be the best
 , while aluminum and steel are often found in inexpensive models. Sometimes wood is used, especially in old bayans from
 the Punjab. Clay is also used, although not favored for durability; these are generally found in the North-East region of Bengal.
The name of the head areas are:<br>
•	chat, chanti, keenar, kinar, ki<br>
•	sur, maidan, lao, luv<br>
•	center: syahi, siaahi, gob<br><br>
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