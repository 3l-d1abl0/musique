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
	
	<title>	About Us</title>
		<link rel="stylesheet" href="style.css">
	 </head>

	<body background="n1.jpg">
		<div id="wrap">
			<div id="aboutheader">
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
				
				           <div id="inside1"><br><h3>New Arrivals</h3>
						  <?php
						  $instrument=array('drum','flute','guitar','piano','tabla','violin');
						  echo '<table>';
						  for($i=0;$i<count($instrument);$i++)
						  {
							$query="select * from $instrument[$i] where id in(select max(id) from $instrument[$i])";
							$result=mysqli_query($con,$query);
							$row=mysqli_fetch_array($result);
							$name=strtok($row[0]," ");
							echo '<tr><td><img src="instrument/'.$instrument[$i].'/'.$row[5].'/'.$name.'.jpg" width="120" height="100"></td></tr>';
						  }
						  echo '</table>';
						  ?>
						  </div>
				            <div id="inside2"><a href="lessons1.php"><br><br><center>Get Tutor</a></div>
				              <div id="follow"><br><center><h3>Follow Us</h3>
							 <table>
							 <tr>
							 <td><a href="http://www.facebook.com/musique" target="_blank"><img src="facebook.jpg" width="20" height="20"></a></td>
							 <td><a href="http://www.twitter.com/musique" target="_blank"><img src="twitter.jpg" width="20" height="20"></a></td>
							 </tr>
							 </table>
							 </div>
				   </div>
				
				<div id="contents" class="fl">
				<br>	
				 <center><font face="pristina" size="7">MUSiQUE</font></center><br>
				 
				 <p align="justify">
				 Musique, the name itself is enough to deifne us. We Present before you a diverse collection of
				 Musical Instruments along with the wide range of Accessories.Each of the product displayed here
				 are available at our store situated at Greater Noida, New Delhi. 
				 <br>We are one stop solution for Music Enthusists. We also provide information about
				   Music Tutuors available around your locality. We also Provide our Handy and Useful Tips & 
				   downloadable Tutorials.
                   What many people dont realize is the role music could play in their life, throughout the course of their life. Music is our 						connection between the everyday spoken word, and the power of our spirituality.
What have we learned from watching our young people, as they learn to perform and play musical instruments? There is a direct association with the hopeful mindset of youth, and the pouring out of musical creation. Both the young mind and the musical note bring about joy and hope, in an untainted, unlearned environment. The young mind is oblivious to the constraints of life that the middle-aged person has learned well, and the musical note serves as a constant invitation to belief in the impossible.
<br>
				   
				 </p>
				
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