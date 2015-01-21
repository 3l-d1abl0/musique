<?php
ob_start();
session_start();
include('connect.php');
if(!$_SESSION['name']=='admin'&&'user')
header('Location: lessons.php');
else
{
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
	 </head>

	<body background="n1.jpg">
		<div id="wrap">
			<div id="lessheader">
			
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
				
				<div id="contents" class="fl">
					<div id="table2">
					<br><br><center><h1>Lessons & Tutors</h1>
					<?php
					$a=array('drum','flute','guitar','piano','violin','tabla');
					for($i=0;$i<count($a);$i++)
					{	
						echo '<table width="700"><tr><td colspan="5">'.$a[$i].'</td></tr>';
						$query="select * from tips where type='$a[$i]'";
						$result=mysqli_query($con,$query);
						$count=mysqli_num_rows($result);
						$j=0;
						while($row=mysqli_fetch_array($result))
						{
							echo '<tr><td>'.$row[0].'</td></tr>';
							if($j==($count-1)){
							echo '<tr><td><center><embed
								width="200" height="150"
								src="'.$row[2].'"
								type="application/x-shockwave-flash">
							</embed></td></tr>';}
							$j++;
						}
						echo '</table>';
						$email=$_SESSION['id'];
						$query1="select * from tutors where instrument='$a[$i]' and tutors.city in (select city from user where email='$email')";
						$result1=mysqli_query($con,$query1);
						echo '<table width="700"><tr><td>Name</td><td>Address</td><td>City</td><td>Phone</td><td>Email</td><td>Info</td><td>Fee</td></tr>';
						while($row1=mysqli_fetch_array($result1))
						{
							echo '<tr><td>'.$row1[0].'</td><td>'.$row1[2].'</td><td>'.$row1[3].'</td><td>'.$row1[6].'</td><td>'.$row1[7].'</td><td>'.$row1[8].'</td><td>'.$row1[9].'</td></tr>';
						}
						echo '</table><hr><br>'; 
					}
					?>
					</div>
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