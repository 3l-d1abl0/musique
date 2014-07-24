<?php
ob_start();
session_start();
include('connect.php');
if($_SESSION['name']!='admin')
header('Location:logout.php');
else
{
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

	<title>Add product
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
<?php	
 if(!isset($_POST['sub']))
 {
?>
<body><center>
	<br><br>
	<h1>Add Product</h1><hr>
	<form name="form1" action="addproduct.php" method="post" enctype="multipart/form-data">
	<table>
	<tr><td>
	<b>
	Name :</td><td><input type="text" name="name" size="20">
    </b></td></tr>
	<tr><td>
	<b>
	Details :</td> <td><textarea name="details" rows="3" cols="20"></textarea>
    </b></td></tr>
	<tr><td>
	<b>
	Price :</td> <td><input type="number" name="price">
    </b></td></tr>
	<tr><td>
	<b>
	Quantity :</td> <td><input type="text" name="quantity">
    </b></td></tr>
	<tr><td>
	<b>
	Type :</td><td><input type="text" name="type">
    </b></td></tr>
	<tr><td>
	<b>
	Category :</td> <td><select name="category"><option value="New">New</option><option value="Used">Used</option><option value="Vintage">Vintage</option></select>
    </b></td></tr>
	<tr><td><b> Photo : </td><td><input type="file" name="file" size="30"></td></b></tr>
	<tr><td>
	<b>
	Status :</td> <td><input type="text" name="status">
    </b></td></tr></table>
	<p align="center"><input type="submit" name="sub" value="Add"></p>
	</form>
	<br><br>
	<table width="100%"><tr>
	<td><a href="welcome.php"><b><i>home</i></b></a></td>
	<td><p align ="right"><a href="logout.php"><b><i>Logout</i></b></a></p></td></tr>
	</table></div></div>
<?php
	}
else 
{
	$name=$_POST['name'];
	//$name = str_replace(' ','&nbsp;', $name1);
	$name2=strtok($name," ");
	$details=$_POST['details'];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];
	$category=$_POST['category'];
	$status=$_POST['status'];
	$type=$_POST['type'];
	$allowedExts=array("jpg","jpeg","gif","png","JPG","PNG","GIF");
	$endfile=explode(".",$_FILES["file"]["name"]);
	$extension=end($endfile);
	if((($_FILES["file"]["type"]=="image/gif")
	||($_FILES["file"]["type"]=="image/jpeg")
	||($_FILES["file"]["type"]=="image/png")
	||($_FILES["file"]["type"]=="image/JPG")
	||($_FILES["file"]["type"]=="image/PNG")
	||($_FILES["file"]["type"]=="image/GIF")
	||($_FILES["file"]["type"]=="image/pjpeg"))
	&&($_FILES["file"]["size"]<600000)
	&& in_array($extension,$allowedExts))
	{
	if($_FILES["file"]["error"]>0)
	{ 
	echo "return code :" . $_FILES["file"]["error"]. "<br />";
	}
	else
	{
	$photo=$name2.".".$extension;
	if(file_exists("instrument/".$type."/".$category."/".$photo))
	{   $loc="instrument/".$type."/".$category."/".$photo;
		unlink($loc);
		move_uploaded_file($_FILES["file"]["tmp_name"],"instrument/".$type."/".$category."/".$photo);
	}
	else
	{
	 move_uploaded_file($_FILES["file"]["tmp_name"],"instrument/".$type."/".$category."/".$photo);
	}
	}
    }
	$query="select * from $type where name='$name'";
	$result=mysqli_query($con,$query);
	$flag=0;
	if($result){
	while($row=mysqli_fetch_array($result))
	{
		$quantity=$row[4]+$quantity;
		$query1="update $type set quantity=$quantity where name='$name'";
		echo $query1;
		$result1=mysqli_query($con,$query1);
		$flag=1;
		header('Location: welcome.php');
	}}
	if($flag==0){
	$query="insert into $type(name,details,price,quantity,category,status) values('$name','$details',$price,$quantity,'$category',$status)";
	$result=mysqli_query($con,$query);
	if($result)
	header('Location: welcome.php');
	}
	else
	echo 'error';
}	
}
?>	
	</body>
</html>