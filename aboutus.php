<?php
ob_start();
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="content-language" content="en" />

<meta name="Keywords" content="Musique, Music, Sameer Barha">
<meta name="Description" content="Sample project on a Music Shop">
<meta name="robots" content="index,follow">
<meta name="googlebot" content="index,follow">
<meta name="author" content="Sameer Barha">
<meta name="language" content="english">


<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="fb:admins" content="1530159092"/>

		<title>About Us</title>
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
				<?php
				if(!isset($_POST['sub']))
				{
				?>
				<div id="side2" class="fl">
				      <div id="joinus"><a href="register.php"><center><br>Join Us</center></a></div>
				         <div id="login">
						 <br><br><center><font size="4" color="#f5f0ec">Login</font></center>
								<form name="form1" action="aboutus.php" method="post">
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
			Privacy Policy | Report spam | Sitemap<br>
			Developed By : Sameer Barha & Suman Anand
			</center>
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
					header('Location: aboutus1.php');	
				}	
				else
				header('Location:aboutus.php');
			}
			else
			header('Location:aboutus.php');
		}
		?>
	</body>
</html>