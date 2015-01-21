<?php
ob_start();
session_start();
include('connect.php');
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
	 </head>

	<body background="dback.jpg">
		<div id="wrap">
			<div id="dheader">
			
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
				<div id="display" class="fl">
						<?php
						$category=$_GET['category'];
							echo '<br>
							<div id="table1">
							<center>
							<table  width="690">';
							echo '<tr><th colspan="5"><h1>'.$category.'</h1></center></th></tr>';
							$query="select * from drum where category='$category'  and status=2";
							$result=mysqli_query($con,$query);
							while($row=mysqli_fetch_array($result))
							{
								$name=strtok($row[0]," ");
								echo '<tr><td><br><a href="booking.php?name='.$row[0].'&id='.$row[1].'&tn=drum&sub1=submit"><img src="instrument/drum/'.$category.'/'.$name.'.jpg" width="300" height="150"></a></td><td>'.$row[0].'<br>Price: Rs '.$row[3].'</td></tr>';
							}
							echo '</table></div><hr>';		
						?>
				</div>
				<?php
				if(!isset($_POST['sub']))
				{
				?>
				<div id="side2" class="fl">
				      <div id="joinus"><a href="register.php"><center><br>Join Us</center></a></div>
				         <div id="login">
						 <br><br><center><font size="4" color="#f5f0ec">Login</font></center>
								<form name="form1" action="drumssection.php" method="post">
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
					header('Location: drumssection1.php');	
				}	
				else
				header('Location:drumssection.php');
			}
			else
			header('Location:drumssection.php');
		}
		?>
	</body>
</html>