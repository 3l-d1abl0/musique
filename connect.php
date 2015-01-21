<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
$server="servername";
$name="username";
$password="password";
$database="databasename";
$con=mysqli_connect($server,$name,$password,$database);
if(!$con)
echo 'connection failed';
?>
</body>
</html>