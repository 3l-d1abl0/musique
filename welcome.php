<?php
ob_start();
session_start();
include('connect.php');
if($_SESSION['name']!='admin')
header('Location: logout.php');
else
{
?>
<html>
	<head>
	<title>Login</title>
	<link rel="stylesheet" href="style1.css">
	</head>
	<body background="n2.jpg">
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
				
				<div class="clear"></div>
			</div>

			<div id="main">
				   <div id="side1" class="fl">
				   </div>
				<div id="contents1" class="fl">
				<center><br>
				<h1>Welcome Admin</h1>
				<table><br>
				<tr><td>
				<ol>
				<li><a href="seeproduct.php">View Products</a></li>
				<li><a href="addproduct.php">Add Products</a></li>
				<li><a href="seeproduct.php">Remove Products</a></li>
				<li><a href="seeuser.php">View Users</a></li>
				<li><a href="adduser.php">Add Users</a></li>
				<li><a href="seeuser.php">Remove Users</a></li>
				<li><a href="seetip.php">View Tips</a></li>
				<li><a href="addtip.php">Add Tips</a></li>
				<li><a href="seetip.php">Remove Tips</a></li>
				<li><a href="seetutor.php">View Tutors</a></li>
				<li><a href="addtutor.php">Add Tutors</a></li>
				<li><a href="seetutor.php">Remove Tutors</a></li>
				<li><a href="seeaccessories.php">View Accessories</a></li>
				<li><a href="addaccessories.php">Add Accessories</a></li>
				<li><a href="seeaccessories.php">Remove Accessories</a></li>
				<li><a href="customer.php">Customer's Info</a></li>
				<li><a href="monthly.php">Monthly Report</a></li>
				</ol>
				</td></tr>
				</table></center>
				</div>
				<div id="side2" class="fl">
				      <div id="joinus"><a href="logout.php"><center><br>Logout</center></a></div>
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