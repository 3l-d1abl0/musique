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

	<body background="">
		<div id="wrap">
			<div id="payheader">
			
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

			<div id="omain">
			  <div id="display" class="fl">
			<?php
			$tn=$_SESSION['tn'];
			$id=$_SESSION['pid'];
			$email=$_SESSION['id'];
			$date=date("Y-m-d");
			$query="select * from $tn where id=$id";
			$result=mysqli_query($con,$query);
			$row=mysqli_fetch_array($result);
			$query1="select * from user where email='$email'";
			$result1=mysqli_query($con,$query1);
			$row1=mysqli_fetch_array($result1);
			if($tn==='accessories')
			{
				echo '<br><br><br><br><br><br><br><br><br><br><center>Your Order Request has been successfully recieved.. You will soon recieve your orders.
				<br> For further enquiries go to Contact Us';
				$query2="insert into orders values('$row[0]',$row[1],'$row1[0]','$row[3]','accessories','$row[2]','$date','$email')";
				mysqli_query($con,$query2);
			}
			else
			{
				echo '<br><br><br><br><br><br><br><br><br><br><center>Your Order Request has been successfully recieved.. You will soon recieve your orders.
				<br> For further enquiries go to Contact Us';
				$quantity=$row[4]-1;
				if($quantity==0)
				$query3="update $tn set quantity=$quantity,status=1 where id=$id";
				else
				$query3="update $tn set quantity=$quantity where id =$id";
				mysqli_query($con,$query3);
				$query2="insert into orders values('$row[0]',$row[1],'$row1[0]','$tn','instrument','$row[3]','$date','$email')";
				mysqli_query($con,$query2);
			}
			?>
			</div>
			
				<div id="side2" class="fl">
				      <div id="joinus"><a href="logout.php"><center><br>Logout</center></a></div>
					  <div id="account"><a href="account.php"><center><br>Your Account</center></a></div>
				         
				</div>
			</div>
			
			<div id="footer">
			<center>Copyright © 2013-2015 MUSiQUE, Inc and MUSiQUE, ND.<br> All Rights Reserved. 
			Payments are performed by Norton, ND.	<br>
			Privacy Policy | Report spam | Sitemap</center>
			</div>
			
		</div>
</body>
</html>
<?php
}
?>		