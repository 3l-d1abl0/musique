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
	
	<title>Contact Us</title>
	
		<link rel="stylesheet" href="style.css">
	 </head>

	<body background="n1.jpg">
		<div id="wrap">
			<div id="conheader">
			
				<div id="logo" class="hh">
				  <h1><font face="pristina"></font></h1>
			      </div>  
				  
				  <div id="type" class="hh">
				  <font face="pristina">	</font>
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
				            <div id="inside2"><a href="lessons.php"><br><br><center>Get Tutor</a></div>
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
				
				<p align="center">
				<font face="verdana" size="4">Contact Us at:<hr><br><br>
				 &nbsp;&nbsp;&nbsp;MUSiQUE,<br>
				 &nbsp;&nbsp;&nbsp;Mahatma Gandhi Road,<br>
                 &nbsp;&nbsp;&nbsp;Greater Noida,<br>
				 &nbsp;&nbsp;&nbsp;New Delhi.<br>
				 &nbsp;&nbsp;&nbsp;Pin-898999<br>
				 &nbsp;&nbsp;&nbsp;Ph:767676768, 6565658679<br><br>
				 
				 &nbsp;&nbsp;&nbsp;Mail at: musique@qwer.com
				 </font>
				</p>
				
				
				
				</div>
				<?php
				if(!isset($_POST['sub']))
				{
				?>
				<div id="side2" class="fl">
				      <div id="joinus"><a href="register.php"><center><br>Join Us</center></a></div>
				         <div id="login">
						 <br><br><center><font size="4" color="#f5f0ec">Login</font></center>
								<form name="form1" action="contactus.php" method="post">
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
					header('Location: contactus1.php');	
				}	
				else
				header('Location:contactus.php');
			}
			else
			header('Location:contactus.php');
		}
		?>
	</body>
</html>