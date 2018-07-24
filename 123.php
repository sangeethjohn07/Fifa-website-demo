<!doctype html>
<html>
	
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body
background="http://hdblackwallpaper.com/wallpaper/2015/04/black-hd-wallpaper-1920x1080-16-free-hd-wallpaper.jpg"); >
<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
	{
		die("connection failed".mysqli_error($con));
	}
	mysqli_select_db($con,"tt");
	
	if(isset($_POST['sub']))
	{
		$user=$_POST['username'];
		$pass=$_POST['password'];
	$qry='insert into `t1` (username,password) values("'.$user.'","'.$pass.'")';
	
	$res=mysqli_query($con,$qry);
	if($res)
	{
		echo "Insertion success";
		
	}
	else
	{
		echo "insertion failed".mysqli_error($con);
	}
	}
	
?>
</body>
</html>