<?php
session_start();
$user=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','boom');
$data="select * from login_details";
$res=mysqli_query($con,$data);
//echo 'vansh';
while($row=mysqli_fetch_array($res)){
	if($row['Username']==$user and $row['Password']==$password)
	{
		$_SESSION['username']=$user;
		//echo "hiii";
		require("home.php");
		$c=1;
		break;
	}
	else{$c=0;}
}
if($c==0){
	require("login.html");
	}
?>