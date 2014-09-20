<?php
include("connect.php");
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql=mysql_query("select title,id from userbase where email = '$email' AND pass = '$pass'");
$count=mysql_num_rows($sql);
if($count==1)
{
	while($row = mysql_fetch_array($sql))
{
	$_SESSION['userid']=$row['id'];
	$_SESSION['title']=$row['title'];
}
	$_SESSION['live']=1;
	header('location: home.php');
}
else
{
	header('location: event-login.php?state=x');

}
?>