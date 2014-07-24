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

	<body background="n1.jpg">
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
				$query="select * from $tn where id=$id";
				$result=mysqli_query($con,$query);
				$row=mysqli_fetch_array($result);
				$query1="select * from user where email='$email'";
				$result1=mysqli_query($con,$query1);
				$row1=mysqli_fetch_array($result1);
				?>
				<center>
				   <table width="520" height="950" >
				   <tr>   
				   <td colspan="2">
				 <?php
					$name=strtok($row[0]," ");
				  if($tn==='accessories')
				  {
					echo  '<img src="accessories/'.$row[3].'/'.$name.'.jpg" align="right" width="300" height="300">';
					$price=$row[2];
				  }	
					else
					{
						echo  '<img src="instrument/'.$tn.'/'.$row[5].'/'.$name.'.jpg" align="right" width="300" height="300">';
						$price=$row[3];
					}
					echo   'Name:'.$row1[0].'<br><br>
				   Address: ' .$row1[2].'  <br><br>
				   Phone No.: '.$row1[5].'<br><br>
				   <font size="4"><b>E-Mail:'.$email.'</b></font>
				   </td>
				   </tr>';
				   if($tn==='guitar')
				   $discount=0.95;
				   else if($tn==='piano')
				   $discount=0.94;
				   else
				   $discount=1;
				   $price*=$discount;
				   echo '<tr><td width="400">Price : Rs '.$price.'</td>
				   <td width="400">
				   <p align="center"><select name="pay">
                           <option value="Home Delivery">On Delivery</option>
							<option value="Credit">Credit</option>
							</select></p></td>
					</td>
					</tr>
				   
				   <tr>
				   <td colspan="2"><center><a href="order.php">Pay</a></center></td>
				   </tr>
				   
				   
				   </table>
				</center>'; 
				
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
<?php
}
?>		
	</body>
</html>