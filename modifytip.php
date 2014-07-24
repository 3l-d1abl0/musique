<?php
ob_start();
session_start();
include('connect.php');
if($_SESSION['name']!='admin')
header('Location: logout.php');
else
{
//if not submitted- this is the code
$tip=$_GET['tip'];
$_SESSION['tip']=$tip;
$query="select * from tips where tips='$tip'";
$result = mysqli_query($con,$query);
if($result)
{
 $row=mysqli_fetch_array($result);
 $tip=$row[0];
 $type=$row[1];
 $url=$row[2];
}
?>
 <html>
<head>
	<title>Monthly report
	</title>
	<link rel="stylesheet" href="mystyle2.css">
</head>
<body background="">
		<div id="wrap">
			<div id="bookheader">
			
				<div id="logo" class="hh">
				  
			      </div>  
				  
				  <div id="type" class="hh">
				  
			      </div>
				  
				  <div id="contact" class="hh">
				 <center><img src="cont1.jpg"></center>
			      </div>
				  </div>
		<div class="clear"></div>
		<div id="main">	
  <center>
	<br>
	<h1>Modify Tip</h1><hr>
	<?php
	echo '<form name="form1" action="modify2.php" method="post">
	<table>
	<tr><td>
	<b><font size="4">
	Tip :</td><td><input type="text" name="tip" value="'.$tip.'" size="50">
    </b></td></tr>
	<tr><td>
	<b><font size="4">
	Type :</td> <td><input type="text" name="type" value="'.$type.'">
    </b></td></tr>
	<tr><td>
	<b><font size="4">
	Url :</td> <td><input type="text" name="url" value="'.$url.'">
    </b></td></tr>
	</table>
	<p align="center"><input type="submit" name="sub" value="Modify"></p>
	</form>
    <br><br>
	<table width="100%"><tr>
	<td><a href="welcome.php"><b><i>home</i></b></a></td>
	<td><p align ="right"><a href="logout.php"><b><i>Logout</i></b></a></p></td></tr>
	</table></div></div>';
	?>
	<br><hr>
<?php
}   
//echo $name.' '.$roll.' '.$phone;	
//if submitted do following code
?>
	</body>
</html>