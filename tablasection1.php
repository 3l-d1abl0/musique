<?php
ob_start();
session_start();
include('connect.php');
if(!$_SESSION['name']=='admin'&&'user')
header('Location: tablasection.php');
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
				<div id="display" class="fl">
						<?php
						$category=$_GET['category'];
							echo '<br>
							<div id="table1">
							<center>
							<table  width="690">';
							echo '<tr><th colspan="5"><h1>'.$category.'</h1></center></th></tr>';
							$query="select * from tabla where category='$category' and status=2";
							$result=mysqli_query($con,$query);
							while($row=mysqli_fetch_array($result))
							{
								$name=strtok($row[0]," ");
								echo '<tr><td><br><a href="booking1.php?name='.$row[0].'&id='.$row[1].'&tn=tabla&sub1=submit"><img src="instrument/tabla/'.$category.'/'.$name.'.jpg" width="300" height="180"></a></td><td>'.$row[0].'<br>Price: Rs '.$row[3].'</td></tr>';
							}
							echo '</table></div><hr>';		
						?>
				</div>
				<div id="side2" class="fl">
				 <div id="joinus"><a href="logout.php"><center><br>Logout</center></a></div>
				 <div id="account"><a href="account.php"><center><br>Your Account</center></a></div>
				<div id="sale">
				Sale
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