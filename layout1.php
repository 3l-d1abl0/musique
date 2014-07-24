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
	<title>MUSiQUE</title>
		<link rel="stylesheet" href="style.css" type="text/css">
	 </head>

	<body background="n1.jpg">
		<div id="wrap">
			<div id="header">
			
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
				
				          <div id="inside1"><br><h3><center>New Arrivals</center></h3>
						  <hr>
						  <?php
						  $instrument=array('drum','flute','guitar','piano','tabla','violin');
						  echo '<table>';
						  for($i=0;$i<count($instrument);$i++)
						  {
							$query="select * from $instrument[$i] where id in(select max(id) from $instrument[$i])";
							$result=mysqli_query($con,$query);
							$row=mysqli_fetch_array($result);
							$name=strtok($row[0]," ");
							echo '<tr><td><img src="instrument/'.$instrument[$i].'/'.$row[5].'/'.$name.'.jpg" width="120" height="100"></td></tr>'; //<td><font size="3">'.$name.'&nbsp;'.$instrument[$i].'</font></td>
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
					
					<br><br><br>
				 <center><img src="musiq.jpg" height="300" width="520"></center>
				 
				<br>
				  
				  <p><font face="verdana" size="4">You Know the Whole World is Passionate about something...
				  & you guessed it Right... its Music.!!!  Every Musician wants to make the world go wild with his tunes..
				    and we fulfil fill their dream.
					<br>
					What many people dont realize is the role music could play in their life, throughout the course of their life. 
					Music is our connection between the everyday spoken word, and the power of our spirituality.
What have we learned from watching our young people, as they learn to perform and play musical instruments? There is a direct
 association with the hopeful mindset of youth, and the pouring out of musical creation. Both the young mind and the musical
 note bring about joy and hope, in an untainted, unlearned environment. The young mind is oblivious to the constraints of life
 that the middle-aged person has learned well, and the musical note serves as a constant invitation to belief in the impossible.
 <br>We present before you the diverse collection of musical instruments
					and wide range of accessories all under one roof.

				  </font></p>
				
				
				
				
				
				
				
				
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